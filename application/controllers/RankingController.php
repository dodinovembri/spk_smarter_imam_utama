<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
        $this->load->model(['AlternativeValueModel', 'SubCriteriaModel', 'CriteriaModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $alternative_values = $this->AlternativeValueModel->getWithBuilderAll()->result();


        /**
         * utility value 
        */ 
        $utility_values = [];
        foreach ($alternative_values as $key => $value) {
            $id_alternatif = $value->id_alternatif;
            $id_kriteria = $value->id_kriteria;
            $id_sub_kriteria = $value->id_sub_kriteria;
            $nama_alternatif = $value->nama_alternatif;
            $nama_kriteria = $value->nama_kriteria;
            $nama_sub_kriteria = $value->nama_sub_kriteria;
            $bobot = $value->bobot;
            // find max per sub criteria
            $max_of_sub_criteria = $this->SubCriteriaModel->getMax($id_kriteria)->row();
            $min_of_sub_criteria = $this->SubCriteriaModel->getMin($id_kriteria)->row();

            $bobot_max = $this->SubCriteriaModel->getBobotMax($id_kriteria, $max_of_sub_criteria->prioritas)->row();
            $bobot_min = $this->SubCriteriaModel->getBobotMin($id_kriteria, $min_of_sub_criteria->prioritas)->row();

            $utility = ($bobot - $bobot_max->bobot) / ($bobot_min->bobot - $bobot_max->bobot);

            $data = array(
                'id_alternatif' => $id_alternatif, 
                'id_kriteria' => $id_kriteria, 
                'id_sub_kriteria' => $id_sub_kriteria, 
                'nama_alternatif' => $nama_alternatif, 
                'nama_kriteria' => $nama_kriteria, 
                'nama_sub_kriteria' => $nama_sub_kriteria, 
                'utility' => $utility
            );
            array_push($utility_values, $data);

        }

        /**
         * last result
        */ 
        $last_results = [];
        foreach ($utility_values as $key => $value) {
            $id_alternatif = $value['id_alternatif'];
            $id_kriteria = $value['id_kriteria'];
            $id_sub_kriteria = $value['id_sub_kriteria'];
            $nama_alternatif = $value['nama_alternatif'];
            $nama_kriteria = $value['nama_kriteria'];
            $nama_sub_kriteria = $value['nama_sub_kriteria'];
            $utility = $value['utility'];
            // find bobot
            $bobot_criteria = $this->CriteriaModel->getById($id_kriteria)->row();
            $last_result = $utility * $bobot_criteria->bobot;

            $data_last_result = array(
                'id_alternatif' => $id_alternatif, 
                'id_kriteria' => $id_kriteria, 
                'id_sub_kriteria' => $id_sub_kriteria, 
                'nama_alternatif' => $nama_alternatif, 
                'nama_kriteria' => $nama_kriteria, 
                'nama_sub_kriteria' => $nama_sub_kriteria, 
                'utility' => $utility,
                'last_result' => $last_result
            );
            array_push($last_results, $data_last_result);
            
        }

        /**
         * total of last result per alternatif
        */ 
        $id_alternatif_temp = '';
        $total_each_last_result = 0;
        $total_last_result_per_alternative = [];

        foreach ($last_results as $key => $value) {
            $id_alternatif = $value['id_alternatif'];
            $id_kriteria = $value['id_kriteria'];
            $id_sub_kriteria = $value['id_sub_kriteria'];
            $nama_alternatif = $value['nama_alternatif'];
            $nama_kriteria = $value['nama_kriteria'];
            $nama_sub_kriteria = $value['nama_sub_kriteria'];
            $utility = $value['utility'];
            $last_result = $value['last_result'];

            if ($key == 0) {
                $id_alternatif_temp = $id_alternatif;
                $total_each_last_result = $last_result;
            }else{
                if ($id_alternatif_temp == $id_alternatif) {
                    $total_each_last_result = $total_each_last_result + $last_result;
                }else{
                    $total_last_each = array(
                        'id_alternatif' => $id_alternatif_temp, 
                        'nama_alternatif' => $nama_alternatif, 
                        'total_each_last_result' => $total_each_last_result
                    ); 
                    array_push($total_last_result_per_alternative, $total_last_each);
                    $id_alternatif_temp = $id_alternatif;
                    $total_each_last_result = $last_result;
                }
            }
        }
        // push last record
        $total_last_each = array(
            'id_alternatif' => $id_alternatif_temp, 
            'nama_alternatif' => $nama_alternatif, 
            'total_each_last_result' => $total_each_last_result
        ); 
        array_push($total_last_result_per_alternative, $total_last_each);

        $n=count($total_last_result_per_alternative);
        // sort with buble sort
        for ($i=0; $i < $n; $i++) { 
            for ($j=$n-1; $j > $i ; $j--) { 
                if ($total_last_result_per_alternative[$j]["total_each_last_result"] > $total_last_result_per_alternative[$j-1]["total_each_last_result"]) {
                    $dummy=$total_last_result_per_alternative[$j];
                    $total_last_result_per_alternative[$j]=$total_last_result_per_alternative[$j-1];
                    $total_last_result_per_alternative[$j-1]=$dummy;
                }
            }
        } 

        $data['total_last_result_per_alternatives'] = $total_last_result_per_alternative;
        
        $this->load->view('templates/header');
		$this->load->view('ranking/index', $data);
        $this->load->view('templates/footer');
	}
}
