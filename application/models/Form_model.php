<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $table = 'form';

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
     * membuat aksess baru untuk perusahaan
     *
     * @param array $object
     * @return void
     */
    public function new_akses(array $object)
    {
        $this->db->insert('akses', $object);
    }
    /**
     * mengambil semua data akses
     *
     * @return void
     */
    public function get_akses($id)
    {
        $this->db->select('*');
        $this->db->from('akses');
        $this->db->join('perusahaan', 'perusahaan.id_perusahaan = akses.id_perusahaan');
        $this->db->join('form', 'form.id_form = akses.id_form');
        $this->db->where('perusahaan.id_perusahaan', $id);
        return $this->db->get();
    }
    /**
     * cek apakah perusahaan sudah memiliki form akses
     *
     * @return void
     */
    public function check_form($id_perusahaan, $id_form)
    {
        $this->db->select('*');
        $this->db->from('akses');
        $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('id_form', $id_form);
        return $this->db->get();
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

    /**
     * mengambil data form join dengan isi form
     *
     * @param array $where
     *
     * @return void
     */
    public function get_where_join(array $where)
    {
        $this->db->select('*');
        $this->db->from('form');
        $this->db->join('isi_form', 'isi_form.id_form = form.id_form');
        $this->db->where($where);
        return $this->db->get();
    }


    /**
     * mengambil semua data tabel
     *
     * @return void
     */
    public function get_all()
    {
        return $this->db->get($this->table);
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
        $where['id'] = $data['id'];

        return $this->db->where($where)->update($this->table, $data);
    }
    /**
     * ubah akses form.
     * arr data ada id nya
     * idnya yang di pake untuk where
     *
     * data yang di update juga ada arr data
     * @param array $data
     * @return void
     */
    public function ubah_akses(array $data, $id)
    {

        return $this->db->where('id_akses', $id)->update('akses', $data);
    }
    public function ubah_akses_all(array $data, $id)
    {

        return $this->db->where('id_perusahaan', $id)->update('akses', $data);
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
