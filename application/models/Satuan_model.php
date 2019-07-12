<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan_model extends CI_Model
{
    public function getAllSatuan()
    {
        return $this->db->get('satuan')->result_array();
    }

    public function CreateSatuan()
    {
        $nama_satuan = $this->input->post('nama_satuan');

        $data = array(
            'nama_satuan' => $nama_satuan
        );

        $this->db->insert('satuan', $data);
    }

    public function getSatuanById($id)
    {
        return $this->db->get_where('satuan', ['id' => $id])->row_array();
    }

    public function EditSatuan()
    {
        $id = $this->input->post('id');

        $nama_satuan = $this->input->post('nama_satuan');

        $data = array(
            'nama_satuan' => $nama_satuan,
        );
        $this->db->where('id', $id);
        $this->db->update('satuan', $data);
    }

    public function HapusSatuan($id)
    {
        $this->db->delete('satuan', ['id' => $id]);
    }
}
