<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('guru')->result();
    }
}
