<?php

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Penjualan Barang';
      
      $data['penjualan'] = $this->Penjualan_model->duatable();
        if ($this->input->post('keyword')) {
            $data['penjualan'] = $this->Penjualan_model->cariDataBarang();
        }
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footertemplate');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('kd_barang', 'kd_barang', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('penjualan/tambah');
            $this->load->view('templates/footertemplate');
        } else {
            $this->Riwayat_model->tambahDataPenjualan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('penjualan');
        }
    }

    public function hapus($kd_barang)
    {
        $this->Penjualan_model->hapusDataBarang($kd_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('penjualan');
    }

  

    public function detail($kd_barang)
    {
        $data['title'] = 'Detail Penjualan Barang';
        $data['penjualan'] = $this->Penjualan_model->getPenjualanBarangByKode($kd_barang);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penjualan/detail', $data);
        $this->load->view('templates/footertemplate');
    }
}
