<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->getKategoriById($id);

        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/kategori/edit', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Kategori_model->EditKategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Edit Kategori!</div>');
            redirect('masterbarang/index');
        }
    }

    public function delete($id)
    {
        $this->Kategori_model->HapusKategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Delete Kategori!</div>');
        redirect('masterbarang/index');
    }
}
