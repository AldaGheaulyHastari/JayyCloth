<?php

class Penjualan_model extends CI_model
{
     public function duatable()
    {
     
        $this->db->select('*');
         $this->db->from('penjualan');
    $this->db->join('riwayat_barang','riwayat_barang.kd_barang=penjualan.kd_barang','inner');
       $query = $this->db->get();
        return $query->result();
    }

    

    public function tambahDataBarang()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang', true),
            "tanggal" => $this->input->post('tanggal', true),
        ];

        $this->db->insert('penjualan', $data);
    }

    public function hapusDataBarang($kd_barang)
    {
        $this->db->where('kd_barang', $kd_barang);
        $this->db->delete('penjualan');
    }

    public function getPenjualanBarangByKode($kd_barang)
    {
        return $this->db->get_where('penjualan', ['kd_barang' => $kd_barang])->row_array();
    }


    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
      
        $this->db->like('kd_barang', $keyword);
         $this->db->or_like('tanggal', $keyword);
        return $this->db->get('penjualan ')->result();
    }
}
