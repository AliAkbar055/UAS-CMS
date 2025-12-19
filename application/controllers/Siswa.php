<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/tambah');
        $this->load->view('layout/footer');
    }

    public function simpan()
    {
        // DEBUG – AKTIFKAN 1X UNTUK CEK
        // echo "<pre>";
        // print_r($_POST);
        // die;
    
        $data = [
            'nis' => $this->input->post('nis'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan')
        ];
    
        $this->db->insert('siswa', $data);
    
        redirect('siswa');
    }
    

    public function edit($id)
    {
        $data['siswa'] = $this->db->get_where('siswa', ['id' => $id])->row();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update($id)
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->db->where('id', $id);
        $this->db->update('siswa', $data);

        redirect('siswa');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('siswa');

        redirect('siswa');
    }
}
