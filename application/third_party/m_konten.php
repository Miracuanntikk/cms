<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_konten extends CI_Model
{
    public function kt()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->join('konten','konten.id_kategori = kategori.id_kategori');
        return $this->db->get('');
    }
}