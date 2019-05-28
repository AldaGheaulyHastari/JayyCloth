<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm', 'required|trim|matches[password]');


        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('messagae', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan,silahkan Login</div>')
            redirect('auth');
        }
    }
}
