<?php

class Manajemen_model extends CI_model {
    public function getAllManajemen()
    {
       return $this->db->get('riwayat_barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "size" => $this->input->post('size', true),
            "harga" => $this->input->post('harga', true),
        ];

        $this->db->insert('riwayat_barang', $data);
    }

    public function hapusDataBarang($kode_barang)
    {
        $this->db->where('kode_barang', $kode_barang);
        $this->db->delete('riwayat_barang');
    }

    public function getRiwayatBarangByKode($kode_barang)
    {
       return $this->db->get_where('riwayat_barang',['kode_barang' => $kode_barang])->row_array();
    }
}