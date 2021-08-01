<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);
    }

    public function index()
    {
        $user_id = $this->session->userdata('id');
        $data['user'] = $this->UserModel->getById($user_id)->row();

        $this->load->view('templates/header');
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function store($id)
    {
        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/user/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'name'       => $this->input->post('name'),
                'email'        => $this->input->post('email'),
                'gambar'      => $this->upload->data('file_name')
            );

            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Data profil berhasil diubah!");
            return redirect(base_url('profile'));          
        }
        else
        {                          
            $data = array(
                'name'       => $this->input->post('name'),
                'email'        => $this->input->post('email')
            );
        
            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Data profile berhasil diubah!");
            return redirect(base_url('profile'));
        }
    }

    public function store_pw($id)
    {
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang anda masukkan tidak cocok");
            return redirect(base_url('profile'));
        }else{
            $password = md5($password);                             
            $data = array(
                'password' => $password
            );

            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Password berhasil diganti!");
            return redirect(base_url('profile'));
        }
    }
}
