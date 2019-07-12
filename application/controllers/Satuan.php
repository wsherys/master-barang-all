<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Satuan_model');
        $this->load->library('form_validation');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['satuan'] = $this->Satuan_model->getSatuanById($id);

        $this->form_validation->set_rules('nama_satuan', 'satuan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/master_header');
            $this->load->view('superadmin/satuan/edit', $data);
            $this->load->view('templates/master_footer');
        } else {
            $this->Satuan_model->EditSatuan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Edit Satuan!</div>');
            redirect('masterbarang/create');
        }
    }

    public function delete($id)
    {
        $this->Satuan_model->HapusSatuan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">Success Delete Satuan!</div>');
        redirect('masterbarang/create');
    }
}
