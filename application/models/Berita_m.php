<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{
    public function get_all()
    {
        $this->db->select('berita.*, kategori.kategori AS kategori');
        $this->db->from('berita');
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function get_byId($id)
    {
        $this->db->select('berita.*, kategori.kategori AS kategori');
        $this->db->from('berita');
        $this->db->where('berita.id', $id);
        $this->db->join('kategori', ' kategori.id = berita.kategori_id');
        return $this->db->get()->row();
    }

    public function create($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function update($tabel, $data, $id)
    {
        return $this->db->update($tabel, $data, ['id' => $id]);
    }

    public function delete($tabel, $id)
    {
        return $this->db->delete($tabel, ['id' => $id]);
    }
}
