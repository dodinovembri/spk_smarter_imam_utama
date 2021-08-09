<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CriteriaController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['CriteriaModel']); //untuk load
    }

    public function index()
    {
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('criteria/index', $data);
        $this->load->view('templates/footer');
    }

    public function sub_criteria()
    {
        $data['criterias'] = $this->CriteriaModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('criteria/index_sub_criteria', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('criteria/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $kode_kriteria = $this->input->post('kode_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $prioritas = $this->input->post('prioritas');
        $status = $this->input->post('status');

        $data = array(
            'kode_kriteria'   => $kode_kriteria,
            'nama_kriteria'   => $nama_kriteria,
            'prioritas'   => $prioritas,
            'status' => $status
        );

        $this->CriteriaModel->insert($data);
        $this->updateBobot();

        $this->session->set_flashdata('success', "Data kriteria berhasil ditambahkan!");
        return redirect(base_url('criteria'));
    }

    public function show($id)
    {
        $data['criteria'] = $this->CriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criteria/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['criteria'] = $this->CriteriaModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('criteria/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $kode_kriteria = $this->input->post('kode_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $prioritas = $this->input->post('prioritas');
        $status = $this->input->post('status');

        $data = array(
            'kode_kriteria'   => $kode_kriteria,
            'nama_kriteria'   => $nama_kriteria,
            'prioritas'   => $prioritas,
            'status' => $status
        );

        $this->CriteriaModel->update($data, $id);
        $this->updateBobot();
        
        $this->session->set_flashdata('success', "Data kriteria berhasil diubah!");
        return redirect(base_url('criteria'));
    }

    public function destroy($id)
    {
        $this->CriteriaModel->destroy($id);
        $this->session->set_flashdata('success', "Data Kriteria berhasil dihapus!");
        return redirect(base_url('criteria'));
    }

    public function updateBobot()
    {
        $criterias = $this->CriteriaModel->get()->result();
        $total_criteria = count($criterias);

        $bobot_roc = [];
        foreach ($criterias as $key => $value) {
            $id_kriteria = $value->id;
            $kode_kriteria = $value->kode_kriteria;
            $nama_kriteria = $value->nama_kriteria;

            $total_bobot_per = 0;
            foreach ($criterias as $key2 => $value2) {
                if ($key2 >= $key) {
                    $bobot_per = 1 / $value2->prioritas;
                    $total_bobot_per = $total_bobot_per + $bobot_per;
                }
            }
            $bobot = $total_bobot_per / $total_criteria;
            $data = array(
                'id_kriteria' => $id_kriteria,
                'kode_kriteria' => $kode_kriteria,
                'nama_kriteria' => $nama_kriteria,
                'bobot' => $bobot
            );

            array_push($bobot_roc, $data);
        }

        foreach ($bobot_roc as $key3 => $value3) {
            $id_kriteria = $value3['id_kriteria'];
            $bobot = $value3['bobot'];

            $data = array(
                'bobot'   => $bobot
            );

            $this->CriteriaModel->update($data, $id_kriteria);
        }
    }
}
