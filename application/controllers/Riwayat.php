<?php

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Riwayat_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Riwayat Barang';
        $data['riwayat'] = $this->Riwayat_model->getAllManajemen();
        if ($this->input->post('keyword')) {
            $data['riwayat'] = $this->Riwayat_model->cariDataBarang();
        }

        $this->load->view('templates/sidebar', $data);
        $this->load->view('riwayat/index');
        $this->load->view('templates/footertemplate');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('kd_barang', 'kd_barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('riwayat/tambah');
            $this->load->view('templates/footertemplate');
        } else {
            $this->Riwayat_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('riwayat');
        }
    }

    public function hapus($kd_barang)
    {
        $this->Riwayat_model->hapusDataBarang($kd_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('riwayat');
    }

    public function detail($kd_barang)
    {
        $data['title'] = 'Detail Data Barang';
        $data['riwayat_barang'] = $this->Riwayat_model->getRiwayatBarangByKode($kd_barang);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('riwayat/detail', $data);
        $this->load->view('templates/footertemplate');
    }


    public function ubah($kd_barang)
    {
        $data['title'] = 'Form Ubah Data Barang';
        $data['riwayat_barang'] = $this->Riwayat_model->getRiwayatBarangByKode($kd_barang);
        $data['size'] = ['S', 'M', 'L', 'XL', 'XXL'];

        $this->form_validation->set_rules('kd_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('riwayat/ubah', $data);
            $this->load->view('templates/footertemplate');
        } else {
            $this->Riwayat_model->ubahDataBarang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('riwayat');
        }
    }
}
