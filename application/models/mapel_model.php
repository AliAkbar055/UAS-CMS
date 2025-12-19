<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

    public function getAll()
    {
        $this->db->select('mapel.*, guru.nama_guru');
        $this->db->from('mapel');
        $this->db->join('guru', 'guru.id = mapel.guru_id', 'left');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert('mapel', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('mapel', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('mapel', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('mapel', ['id' => $id]);
    }
}
