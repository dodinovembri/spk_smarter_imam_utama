<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCriteriaController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['SubCriteriaModel']);
    }

	public function index($id)
	{
        $criteria = array(
            'id_kriteria' => $id
        );
        $this->session->set_userdata($criteria);

        $data['sub_criterias'] = $this->SubCriteriaModel->getWithBuilder($id)->result();

        $this->load->view('templates/header');
		$this->load->view('sub_criteria/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('sub_criteria/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $id_kriteria = $this->session->userdata('id_kriteria');
        $nama_sub_kriteria = $this->input->post('nama_sub_kriteria');
        $prioritas = $this->input->post('prioritas');
        $status = $this->input->post('status');

        $data = array(
            'id_kriteria' => $id_kriteria,
            'nama_sub_kriteria' => $nama_sub_kriteria,
            'prioritas' => $prioritas,
            'status' => $status
        );

        $this->SubCriteriaModel->insert($data);
        $this->updateBobot();

        $this->session->set_flashdata('success', "Data nilai kriteria berhasil ditambahkan!");
        return redirect("sub_criterias/$id_kriteria");
   
    }

    public function show($id)
    {
        $data['sub_criteria'] = $this->SubCriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('sub_criteria/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['sub_criteria'] = $this->SubCriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('sub_criteria/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $id_kriteria = $this->session->userdata('id_kriteria');
        $nama_sub_kriteria = $this->input->post('nama_sub_kriteria');
        $prioritas = $this->input->post('prioritas');
        $status = $this->input->post('status');

        $data = array(
            'nama_sub_kriteria' => $nama_sub_kriteria,
            'prioritas' => $prioritas,
            'status' => $status
        );
        $this->SubCriteriaModel->update($data, $id);
        $this->updateBobot();
        
        $this->session->set_flashdata('success', "Data nilai kriteria berhasil diubah!");
        return redirect(base_url("sub_criterias/$id_kriteria"));      
    }

    public function destroy($id)
    {
        $id_kriteria = $this->session->userdata('id_kriteria');
        $this->SubCriteriaModel->destroy($id);
        $this->session->set_flashdata('success', "Data nilai kriteria berhasil dihapus!");
        return redirect(base_url("sub_criterias/$id_kriteria"));
    }

    public function updateBobot()
    {
        $id_kriteria = $this->session->userdata('id_kriteria');
        $sub_criterias = $this->SubCriteriaModel->getByIds($id_kriteria)->result();
        $total_sub_criteria = count($sub_criterias);

        $bobot_roc = [];
        foreach ($sub_criterias as $key => $value) {
            $id_sub_kriteria = $value->id;
            $id_kriteria = $value->id_kriteria;
            $nama_sub_kriteria = $value->nama_sub_kriteria;

            $total_bobot_per = 0;
            foreach ($sub_criterias as $key2 => $value2) {
                if ($key2 >= $key) {
                    $bobot_per = 1 / $value2->prioritas;
                    $total_bobot_per = $total_bobot_per + $bobot_per;
                }
            }
            $bobot = $total_bobot_per / $total_sub_criteria;
            $data = array(
                'id_sub_kriteria' => $id_sub_kriteria,
                'id_kriteria' => $id_kriteria,
                'nama_sub_kriteria' => $nama_sub_kriteria,
                'bobot' => $bobot
            );

            array_push($bobot_roc, $data);
        }

        foreach ($bobot_roc as $key3 => $value3) {
            $id_sub_kriteria = $value3['id_sub_kriteria'];
            $bobot = $value3['bobot'];

            $data = array(
                'bobot'   => $bobot
            );

            $this->SubCriteriaModel->update($data, $id_sub_kriteria);
        }
    }
}