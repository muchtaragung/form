<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
        $this->load->model('User_model', 'user');
        $this->load->model('Perusahaan_model', 'perusahaan');
        if ($this->session->userdata('status') != 'user') {
            echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
            redirect('admin/login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    /**
     * menampilkan list dari form
     *
     * @return void
     */
    public function list_form()
    {
        $data['page_title'] = "List Form | Program Form";
        $data['form']       = $this->form->get_all()->result();
        $this->load->view('dashboard/list_form', $data);
    }

    /**
     * mengecek apakah form sudah di isi oleh user atau belom
     * jika sudah maka akan mengalihkan tampilan ke show for,
     * jika belum maka akan mengalihkan ke isi form
     *
     * @param [type] $id_form
     *
     * @return void
     */
    public function view_form($id_form)
    {
        $where = array(
            'form.id_form' => $id_form,
            'isi_form.id_user' => $this->session->userdata('id')
        );

        $form = $this->form->get_where(['id_form' => $id_form])->row();
        $isi = $this->form->get_where_join($where)->row();
        $nama_form = strtolower(str_replace(' ', '_', $form->nama_form));

        if (isset($isi)) {
            redirect('form/' . $nama_form . "/" . "show/" . $isi->id_isi);
        } else {
            redirect('form/' . $nama_form . '/');
        }
    }
}
