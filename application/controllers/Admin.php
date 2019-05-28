<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dasboard';
        $data['admin'] = $this->db->get_where('users', ['name' => $this->session->userdata('name')])->row_array();


        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footertemplate');
    }
}
