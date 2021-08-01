<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlternativeValueController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel', 'CriteriaModel', 'SubCriteriaModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index($id)
    {
        $alternative = array(
            'id_alternatif' => $id
        );

        $this->session->set_userdata($alternative);
        $data['alternative_values'] = $this->AlternativeValueModel->getWithBuilder($id)->result();

        $this->load->view('templates/header');
        $this->load->view('alternative_value/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('alternative_value/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $id_alternatif = $this->session->userdata('id_alternatif');
        $criteria_criterion = $this->input->post('criteria_criterion');
        $this->AlternativeValueModel->destroy_by_alternative($id_alternatif);

        foreach ($criteria_criterion as $key => $value) {
            $data = explode("&", $value);

            $id_alternatif = $this->session->userdata('id_alternatif');
            $id_kriteria = $data[0];
            $id_sub_kriteria = $data[1];

            $data = array(
                'id_alternatif' => $id_alternatif,
                'id_kriteria' => $id_kriteria,
                'id_sub_kriteria' => $id_sub_kriteria
            );

            $this->AlternativeValueModel->insert($data);
        }

        $this->session->set_flashdata('success', "Nilai alternatif berhasil di buat!");
        return redirect(base_url("alternative_values/$id_alternatif"));
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        $alternative = $this->AlternativeValueModel->getWithBuilderById($id)->row();
        $data['sub_criterias'] = $this->SubCriteriaModel->getByIds($alternative->id_kriteria)->result();
        $data['alternative_value'] = $alternative;

        $this->load->view('templates/header');
        $this->load->view('alternative_value/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $id_alternatif = $this->session->userdata('id_alternatif');
        $id_sub_kriteria = $this->input->post('id_sub_kriteria');

        $data = array(
            'id_sub_kriteria' => $id_sub_kriteria
        );

        $this->AlternativeValueModel->update($data, $id);
        $this->session->set_flashdata('success', "Data berhasil di ubah!");
        return redirect(base_url("alternative_values/$id_alternatif"));
    }

    public function destroy($id)
    {
        // 
    }
}