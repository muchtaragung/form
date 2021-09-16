<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_form extends CI_Model
{

    public function get_form()
    {
        $query = $this->db->get('form');
        return $query;
    }
    public function get_isi()
    {
        $this->db->select("*");
        $this->db->from('form');
        $this->db->join('isi_form', 'isi_form.id_form = form.id_form');
        $query = $this->db->get();
        return $query;
    }
    public function get_akses($id)
    {
        $this->db->select('*');
        $this->db->from('akses');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan=akses.id_perusahaan');
        $this->db->join('form', 'form.id_form=akses.id_form');
        $this->db->where('form.id_form', $id);
        $query = $this->db->get();
        return $query;
    }
    public function add_akses($data)
    {
        return $this->db->insert('akses', $data);
    }
}
