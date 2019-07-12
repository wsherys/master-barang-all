<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterbarang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masterbarang_model');
        $this->load->model('Kategori_model');
        $this->load->model('Satuan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['mbarang'] = $this->Masterbarang_model->getAllMasterbarang();
        $data['kategori'] = $this->Kategori_model->getAllKategori();

        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/masterbarang/index', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Kategori_model->CreateKategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New Kategori!</div>');
            redirect('masterbarang/index');
        }
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['satuan'] = $this->Satuan_model->getAllSatuan();

        $this->form_validation->set_rules('nama_satuan', 'Satuan', 'trim|required');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('nomor_serial', 'Nomor Serial', 'trim|required');
        $this->form_validation->set_rules('nomor_produk', 'Nomor Produk', 'trim|required');
        $this->form_validation->set_rules('batas', 'Batas Peringatan', 'trim|required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/masterbarang/create', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Masterbarang_model->CreateMasterbarang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New Barang!</div>');
            redirect('masterbarang/index');
        }
    }

    public function createsatuan()
    {
        $this->form_validation->set_rules('nama_satuan', 'Satuan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="failed">Failed Insert New Satuan!</div>');
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/masterbarang/create');
            $this->load->view('templates/master_footer');
        } else {
            $this->Satuan_model->CreateSatuan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Insert New Satuan!</div>');
            redirect('masterbarang/create');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['mbarang'] = $this->Masterbarang_model->getMasterbarangById($id);
        $data['kategori'] = ['Elektronik', 'Alat Tulis', 'Printer'];
        $data['satuan'] = ['PCS', 'Butir'];
        $data['kondisi_barang'] = ['Baru', 'Bekas', 'Rusak'];

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('nomor_serial', 'Nomor Serial', 'trim|required');
        $this->form_validation->set_rules('nomor_produk', 'Nomor Produk', 'trim|required');
        $this->form_validation->set_rules('batas', 'Batas Peringatan', 'trim|required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/masterbarang/edit', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Masterbarang_model->EditMasterbarang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Edit Barang!</div>');
            redirect('masterbarang/index');
        }
    }

    public function delete($id)
    {
        $this->Masterbarang_model->HapusMasterBarang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Delete Barang!</div>');
        redirect('masterbarang/index');
    }
}
