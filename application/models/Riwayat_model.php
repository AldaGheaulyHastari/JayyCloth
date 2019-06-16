<?php

class Riwayat_model extends CI_model
{
    public function getAllManajemen()
    {
        return $this->db->get('riwayat_barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "size" => $this->input->post('size', true),
            "harga" => $this->input->post('harga', true),
        ];

        $this->db->insert('riwayat_barang', $data);
    }

    public function hapusDataBarang($kd_barang)
    {
        $this->db->where('kd_barang', $kd_barang);
        $this->db->delete('riwayat_barang');
    }

    public function getRiwayatBarangByKode($kd_barang)
    {
        return $this->db->get_where('riwayat_barang', ['kd_barang' => $kd_barang])->row_array();
    }

    public function ubahDataBarang()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "size" => $this->input->post('size', true),
            "harga" => $this->input->post('harga', true),
        ];

        $this->db->where('kd_barang', $this->input->post('kd_barang'));
        $this->db->update('riwayat_barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('size', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('riwayat_barang')->result_array();
    }
}
