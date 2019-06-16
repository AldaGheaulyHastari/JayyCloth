<?php

class Ready extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ready_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Barang Ready';
        $data['ready'] = $this->Ready_model->getAllReady();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('ready/index');
        $this->load->view('templates/footertemplate');
    }
    public function detail($kd_barang)
    {
        $data['title'] = 'Detail Data Barang';
        $data['ready_barang'] = $this->Ready_model->getReadyBarangByKode($kd_barang);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('ready/detail', $data);
        $this->load->view('templates/footertemplate');
    }
}
