<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('User_model', 'user');
        $this->load->model('Perusahaan_model', 'perusahaan');
        $this->load->helper('security');
    }

    /**
     * menampilkan list perusahaan
     *
     * @return void
     */
    public function index()
    {
        $data['page_title'] = "List Perusahaan | Program Form";
        $data['perusahaan'] =  $this->perusahaan->get_all()->result();

        $this->load->view('admin/perusahaan/list', $data);
    }

    /**
     * menyimpan data perusahaan
     *
     * @return void
     */
    public function save()
    {
        // mengatur form validasi nama_perusahaan
        $this->form_validation->set_rules(
            'nama_perusahaan',
            'Perusahaan',
            'required|is_unique[perusahaan.nama_perusahaan]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );

        // mengatur error delimiter
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');

        // jika form validasi tidak lolos
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Perusahaan sudah tersedia');
            redirect('admin/perusahaan');
        } else {
            // mengambil data inputan user
            $perusahaan['nama_perusahaan'] = $this->input->post('nama_perusahaan');

            $this->session->set_flashdata('msg', 'Perusahaan berhasil di simpan');
            $this->perusahaan->save($perusahaan);
            redirect('admin/perusahaan');
        }
    }

    /**
     * mengambil data perusahaan untuk di edit
     *
     * @param integer $id
     *
     * @return void
     */
    public function edit($id)
    {
        $data = $this->perusahaan->get_where(['id_perusahaan' => $id])->row();
        echo json_encode($data);
    }

    /**
     * mengupdate data user
     *
     * @return void
     */
    public function update()
    {
        // mengatur form validasi
        $this->form_validation->set_rules(
            'nama_perusahaan',
            'Perusahaan',
            'required|is_unique[perusahaan.nama_perusahaan]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );

        // mengatur error delimiter
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');

        // jika form validasi tidak lolos
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Perusahaan sudah tersedia');
            redirect('admin/perusahaan');
        } else {
            // mengatur menngambil data inputan user
            $data = array(
                'id_perusahaan' => $this->input->post('id', true),
                'nama_perusahaan' => $this->input->post('nama_perusahaan', true)
            );

            $this->perusahaan->update($data);
            $this->session->set_flashdata('msg', 'Data berhasil diupdate');
            redirect('admin/perusahaan');
        }
    }

    /**
     * menghapus data perusahaan
     *
     * @param [type] $id_perusahaan
     *
     * @return void
     */
    public function delete($id_perusahaan)
    {
        $this->perusahaan->delete(['id_perusahaan' => $id_perusahaan]);
        $this->session->set_flashdata('msg', 'Data Perusahaan Berhasil Di Hapus');
        redirect('admin/perusahaan');
    }
}
