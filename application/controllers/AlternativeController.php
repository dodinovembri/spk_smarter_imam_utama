<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternatives'] = $this->AlternativeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative/index', $data);
        $this->load->view('templates/footer');
	}

    public function alternative_value()
	{
        $data['alternatives'] = $this->AlternativeModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('alternative/alternative_value', $data);
        $this->load->view('templates/footer');
	}
    
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('alternative/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $jarak_dengan_aspal = $this->input->post('jarak_dengan_aspal');
        $harga = $this->input->post('harga');
        $jarak_dengan_sarana = $this->input->post('jarak_dengan_sarana');
        $luas_lahan = $this->input->post('luas_lahan');
        $tempo_pembayaran = $this->input->post('tempo_pembayaran');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');

        $data = array(
            'kode_alternatif' => $kode_alternatif,
            'nama_alternatif' => $nama_alternatif,
            'jarak_dengan_aspal' => $jarak_dengan_aspal,
            'harga' => $harga,
            'jarak_dengan_sarana' => $jarak_dengan_sarana,
            'luas_lahan' => $luas_lahan,
            'tempo_pembayaran' => $tempo_pembayaran,
            'keterangan' => $keterangan,
            'status' => $status
        );

        $this->AlternativeModel->insert($data);
        $this->session->set_flashdata('success', "Alternatif berhasil di buat!");
        return redirect(base_url('alternative'));
    }

    public function show($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();
        $this->load->view('templates/header');
        $this->load->view('alternative/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['alternative'] = $this->AlternativeModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('alternative/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $kode_alternatif = $this->input->post('kode_alternatif');
        $nama_alternatif = $this->input->post('nama_alternatif');
        $jarak_dengan_aspal = $this->input->post('jarak_dengan_aspal');
        $harga = $this->input->post('harga');
        $jarak_dengan_sarana = $this->input->post('jarak_dengan_sarana');
        $luas_lahan = $this->input->post('luas_lahan');
        $tempo_pembayaran = $this->input->post('tempo_pembayaran');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');

        $data = array(
            'kode_alternatif' => $kode_alternatif,
            'nama_alternatif' => $nama_alternatif,
            'jarak_dengan_aspal' => $jarak_dengan_aspal,
            'harga' => $harga,
            'jarak_dengan_sarana' => $jarak_dengan_sarana,
            'luas_lahan' => $luas_lahan,
            'tempo_pembayaran' => $tempo_pembayaran,
            'keterangan' => $keterangan,
            'status' => $status
        );

        $this->AlternativeModel->update($data, $id);
        $this->session->set_flashdata('success', "Alternatif berhasil di ubah!");
        return redirect(base_url('alternative'));
    }

    public function destroy($id)
    {
        $delete = $this->AlternativeModel->destroy($id);        
        $this->session->set_flashdata('success', "Data berhasil di hapus!");
        return redirect(base_url('alternative'));
    }
    
}