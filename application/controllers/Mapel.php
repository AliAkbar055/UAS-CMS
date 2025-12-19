<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model');
        $this->load->model('Guru_model');
    }

    // READ
    public function index()
    {
        $data['mapel'] = $this->Mapel_model->getAll();
        $this->load->view('mapel/index', $data);
    }

    // FORM TAMBAH
    public function tambah()
    {
        $data['guru'] = $this->Guru_model->getAll();
        $this->load->view('mapel/tambah', $data);
    }

    // SIMPAN
    public function simpan()
    {
        $data = [
            'nama_mapel' => $this->input->post('nama_mapel'),
            'guru_id'    => $this->input->post('guru_id')
        ];

        $this->Mapel_model->insert($data);
        redirect('mapel');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data['mapel'] = $this->Mapel_model->getById($id);
        $data['guru']  = $this->Guru_model->getAll();
        $this->load->view('mapel/edit', $data);
    }

    // UPDATE
    public function update($id)
    {
        $data = [
            'nama_mapel' => $this->input->post('nama_mapel'),
            'guru_id'    => $this->input->post('guru_id')
        ];

        $this->Mapel_model->update($id, $data);
        redirect('mapel');
    }

    // DELETE
    public function hapus($id)
    {
        $this->Mapel_model->delete($id);
        redirect('mapel');
    }
}
