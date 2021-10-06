<?php

class Perusahaan_model extends CI_Model
{
    private $table = 'perusahaan';

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
        $this->db->from('perusahaan');
        $this->db->where($where);
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
        $this->db->from('perusahaan');
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
    public function delete_user(array $where)
    {
        return $this->db->delete('user', $where);
    }
}
