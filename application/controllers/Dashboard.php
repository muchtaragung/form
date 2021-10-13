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
        $this->load->model('Akses_model', 'akses');
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
        $select = 'form.id_form, form.nama_form, isi_form.isi,isi_form.id_user as user_id, user.id_user';
        $join = [
            ['form', 'akses.id_form = form.id_form'],
            ['perusahaan', 'perusahaan.id_perusahaan= akses.id_perusahaan'],
            ['user', 'user.id_perusahaan = perusahaan.id_perusahaan'],
            ['isi_form', 'isi_form.id_form = form.id_form AND isi_form.id_user = user.id_user'],
        ];

        $where = [
            'akses.akses' => 1,
            'user.id_user' => $this->session->userdata('id')
        ];

        $data['page_title'] = "List Form | Program Form";
        $data['form']       = $this->akses->get_join_where($select, $join, $where)->result();
        // $data['form']       = $this->akses->get_join_where($this->session->userdata('id'))->result();
        var_dump($data);
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

    public function download_form($id_form)
    {
        $form = $this->form->get_where(['id_form' => $id_form])->row();
        $nama_form = strtolower(str_replace(' ', '_', $form->nama_form));

        redirect('pdf_form/' . $nama_form . ".pdf");
    }
}
