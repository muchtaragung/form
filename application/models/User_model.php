<?php

class User_model extends CI_Model
{
    /**
     * mengecek login user
     *
     * @param string $email
     *
     * @return void
     */
    public function cek_login($email)
    {
        $hasil = $this->db->where('email_user', $email)->limit(1)->get('user');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    // nama tabel
    private $table = 'user';

    /**
     * menyimpan data ke tabel
     *
     * @param array $object
     * @return void
     */
    public function save(array $object)
    {
        $this->db->insert($this->table, $object);
    }

    /**
     * mengambil data tabel dengan kondisi where
     *
     * @param array $where array dari data yang mau di ambil
     * @return void
     */
    public function get_where(array $where)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }

    /**
     * mengambil data tabel dengan kondisi where
     *
     * @param array $where array dari data yang mau di ambil
     * @param array $where array dari data yang mau di ambil
     * @return void
     */
    public function get_where_join($where)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan = user.id_perusahaan');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    /**
     * mengambil data tabel dengan kondisi where
     *
     * @param array $where array dari data yang mau di ambil
     * @param array $where array dari data yang mau di ambil
     * @return void
     */
    public function get_where_join_form($id)
    {
        $this->db->select("*");
        $this->db->from('form');
        $this->db->join('isi_form', 'isi_form.id_form = form.id_form');
        $this->db->where('isi_form.id_user', $id);
        $query = $this->db->get();
        return $query;
    }

    /**
     * mengambil semua data tabel
     *
     * @return void
     */
    public function get_all()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query;
    }

    /**
     * mengupdate data.
     * arr data ada id nya
     * idnya yang di pake untuk where
     *
     * data yang di update juga ada arr data
     * @param array $data
     * @return void
     */
    public function update(array $data)
    {
        $where['id_' . $this->table] = $data['id_' . $this->table];

        return $this->db->where($where)->update($this->table, $data);
    }

    /**
     * menghapus data
     * arr where adalah id dari kolom yang akan di hapus
     *
     * @param array $where
     * @return void
     */
    public function delete(array $where)
    {
        return $this->db->delete($this->table, $where);
    }
    /**
     * reset form user
     * arr where adalah id dari kolom yang akan di hapus
     *
     * @param array $where
     * @return void
     */
    public function reset_form($id_form, $id_user)
    {
        $this->db->where('id_form', $id_form);
        $this->db->where('id_user', $id_user);
        return $this->db->delete('isi_form');
    }
}
