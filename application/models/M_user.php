<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{


    public function get_user()
    {
        $this->db->select("*");
        $this->db->from('perusahaan');
        $query = $this->db->get();
        return $query;
    }
    public function get_detail_user($id)
    {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan = user.id_perusahaan');
        $this->db->where('user.id_perusahaan', $id);
        $query = $this->db->get();
        return $query;
    }
    public function get_by_id($id)
    {
        $this->db->from('perusahaan');
        $this->db->where('id_perusahaan', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function detail_get_by_id($id)
    {
        $this->db->from('user');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->update('perusahaan', $data);
        return $this->db->affected_rows();
    }
    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
        return $this->db->affected_rows();
    }
    public function add_perusahaan($data)
    {
        $this->db->insert('perusahaan', $data);
    }
    public function add_user($data)
    {
        $this->db->insert('user', $data);
    }
    public function delete_perusahaan($id)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->delete('perusahaan');
    }
    public function delete_user_by_perusahaan($id)
    {
        $this->db->where('id_perusahaan', $id);
        $this->db->delete('user');
    }
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}
