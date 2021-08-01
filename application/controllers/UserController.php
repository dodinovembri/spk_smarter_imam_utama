<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['users'] = $this->UserModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('user/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('user/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $image = $this->input->post('image');
        $role_id = $this->input->post('role_id');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang dimasukkan tidak sama");
            return redirect(base_url('user'));
        }else{
            $password = md5($password);    

            // for image
            $image = uniqid();
            $config['upload_path']          = './uploads/user/';
            $config['allowed_types']        = 'gif|jpg|png';            
            $config['file_name']            = $image;

            $this->load->library('upload', $config); 

            if ($this->upload->do_upload('image'))
            {
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'gambar' => $this->upload->data('file_name'),
                    'role_id' => $role_id,
                    'status' => $status
                );
            }
            else
            {                          
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role_id' => $role_id,
                    'status' => $status
                );
            }

            $this->UserModel->insert($data);
            $this->session->set_flashdata('success', "User berhasil ditambahkan!");
            return redirect(base_url('user'));
        }
    }

    public function show($id)
    {
        $data['user'] = $this->UserModel->getById($id)->row();

        $this->load->view('templates/header');
		$this->load->view('user/show', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['user'] = $this->UserModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $image = $this->input->post('image');
        $role_id = $this->input->post('role_id');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang dimasukkan tidak sama");
            return redirect(base_url('user'));
        }else{
            $password = md5($password);    

            // for image
            $image = uniqid();
            $config['upload_path']          = './uploads/user/';
            $config['allowed_types']        = 'gif|jpg|png';            
            $config['file_name']            = $image;

            $this->load->library('upload', $config); 

            if ($this->upload->do_upload('image'))
            {
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'gambar' => $this->upload->data('file_name'),
                    'role_id' => $role_id,
                    'status' => $status
                );
            }
            else
            {                          
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role_id' => $role_id,
                    'status' => $status
                );
            }

            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Data user berhasil diubah!");
            return redirect(base_url('user'));
        }
    }

    public function destroy($id)
    {
        $this->UserModel->destroy($id);        
        $this->session->set_flashdata('success', "Sukses menghapus data!");
        return redirect(base_url('user'));
    }
}
