<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('siswa')->result();
    }

    public function insert($data)
{
    return $this->db->insert('siswa', $data);
}

public function update($id, $data)
{
    $this->db->where('id', $id);
    return $this->db->update('siswa', $data);
}


    public function delete($id)
    {
        return $this->db->delete('siswa', ['id' => $id]);
    }
}
