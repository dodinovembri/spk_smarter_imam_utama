<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'AlternativeModel', 'CriteriaModel']);
    }

	public function index()
	{
        $data['alternative'] = $this->AlternativeModel->count();
        $data['criteria'] = $this->CriteriaModel->count();
        $data['user']     = $this->UserModel->count();

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }    
}