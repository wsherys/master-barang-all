<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterbarang_model extends CI_Model
{
    // private $_table = "mbarang";

    // public $id;

    public function getAllMasterbarang()
    {
        return $this->db->get('mbarang')->result_array();
    }

    public function CreateMasterbarang()
    {
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $kategori = $this->input->post('kategori');
        $kondisi_barang = $this->input->post('kondisi_barang');
        $nomor_serial = $this->input->post('nomor_serial');
        $nomor_produk = $this->input->post('nomor_produk');
        $keterangan_barang = $this->input->post('keterangan_barang');
        $batas = $this->input->post('batas');
        $satuan = $this->input->post('satuan');
        $photo = $_FILES['photo']['name'];

        if ($photo = '') { } else {
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'jpg|gif|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                echo "download gagal";
                die();
            } else {
                $photo = $this->upload->data('file_name');
            }

            $data = array(
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'kategori' => $kategori,
                'kondisi_barang' => $kondisi_barang,
                'nomor_serial' => $nomor_serial,
                'nomor_produk' => $nomor_produk,
                'keterangan_barang' => $keterangan_barang,
                'batas' => $batas,
                'satuan' => $satuan,
                'photo' => $photo
            );
            $this->db->insert('mbarang', $data);
        }
    }

    public function getMasterbarangById($id)
    {
        return $this->db->get_where('mbarang', ['id' => $id])->row_array();
    }

    public function EditMasterbarang()
    {
        $id = $this->input->post('id');

        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $kategori = $this->input->post('kategori');
        $kondisi_barang = $this->input->post('kondisi_barang');
        $nomor_serial = $this->input->post('nomor_serial');
        $nomor_produk = $this->input->post('nomor_produk');
        $keterangan_barang = $this->input->post('keterangan_barang');
        $batas = $this->input->post('batas');
        $satuan = $this->input->post('satuan');
        $photo = $_FILES['photo']['name'];

        if ($photo = '') { } else {
            $config['upload_path'] = './image';
            $config['allowed_types'] = 'jpg|gif|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                echo "download gagal";
                die();
            } else {
                $photo = $this->upload->data('file_name');
            }


            $data = array(
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'kategori' => $kategori,
                'kondisi_barang' => $kondisi_barang,
                'nomor_serial' => $nomor_serial,
                'nomor_produk' => $nomor_produk,
                'keterangan_barang' => $keterangan_barang,
                'batas' => $batas,
                'satuan' => $satuan,
                'photo' => $photo
            );
            $this->db->where('id', $id);
            $this->db->update('mbarang', $data);
        }
    }

    public function HapusMasterBarang($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mbarang', ['id' => $id]);
    }
}
