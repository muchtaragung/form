<?php

class Auth_model extends CI_Model
{

    public function cek_login($email)
    {

        $hasil = $this->db->where('email', $email)->limit(1)->get('user');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
    public function cek_login_admin($email)
    {

        $hasil = $this->db->where('email', $email)->limit(1)->get('admin');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
}
