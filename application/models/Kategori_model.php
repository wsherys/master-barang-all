<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function CreateKategori()
    {
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori' => $nama_kategori
        );

        $this->db->insert('kategori', $data);
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id' => $id])->row_array();
    }

    public function EditKategori()
    {
        $id = $this->input->post('id');

        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori' => $nama_kategori,
        );
        $this->db->where('id', $id);
        $this->db->update('kategori', $data);
    }

    public function HapusKategori($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
    }
}
