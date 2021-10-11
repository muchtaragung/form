<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akses_model extends CI_Model
{
    private $table = 'akses';

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
        return $this->db->get_where($this->table, $where);
    }

    public function get_join_where($select, $join, $where)
    {
        $this->db->select($select);
        $this->db->from($this->table);
        foreach ($join as $data) {
            $this->db->join($data[0], $data[1], 'left');
        }
        $this->db->where($where);
        return $this->db->get();
    }
    // public function get_join_where($id_user)
    // {
    //     $this->db->query('SELECT form.id_form, form.nama_form, isi_form.isi, user.id_user FROM akses LEFT JOIN form ON akses.id_form = form.id_form LEFT JOIN perusahaan ON perusahaan.id_perusahaan= akses.id_perusahaan LEFT JOIN isi_form on isi_form.id_form = form.id_form LEFT JOIN user on user.id_perusahaan = perusahaan.id_perusahaan WHERE user.id_user = ' . $id_user . '');
    //     return $this->db->get();
    // }

    /**
     * mengambil semua data tabel
     *
     * @return void
     */
    public function get_all()
    {
        return $this->db->get($this->table);
    }

    public function get_join($join)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        foreach ($join as $data) {
            $this->db->join($data[0], $data[1]);
        }
        return $this->db->get();
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
     * mengupdate data dengan kondisi where.
     * arr data ada id nya
     * idnya yang di pake untuk where
     *
     * data yang di update juga ada arr data
     * @param array $data
     * @param array $where
     * @return void
     */
    public function update_where(array $data, array $where)
    {

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
}
