<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Possible_value_generator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
    }

    private function check_user()
    {
        if ($this->session->userdata('status') != 'user') {
            echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->check_user();

        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Possible Value Generator'])->row();
        // mengecek apakah si user sudah mengisi form atau belum
        $where = [
            'id_form' => $form->id_form,
            'id_user' => $this->session->userdata('id')
        ];
        $isi = $this->isi_form->get_where($where)->row();

        if (isset($isi)) {
            redirect('form/possible_value_generator/show/' . $isi->id_isi);
        }

        $data['page_title'] = 'POSSIBLE VALUE GENERATOR';
        $this->load->view('form/possible_value_generator', $data);
    }

    public function save()
    {
        $this->check_user();

        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Possible Value Generator'])->row();

        // mengambil data dari inputan user
        $data['pertanyaan1']     = $this->input->post('pertanyaan1');
        $data['pertanyaan2']     = $this->input->post('pertanyaan2');
        $data['pertanyaan3']     = $this->input->post('pertanyaan3');
        $data['pertanyaan4']     = $this->input->post('pertanyaan4');

        // data yang akan di masukan ke db
        $form_possible_value_generator['isi'] = json_encode($data); // mengencode data inputan user
        $form_possible_value_generator['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan
        $form_possible_value_generator['id_user'] = $this->session->userdata('id');

        $this->isi_form->save($form_possible_value_generator);
        redirect('/form/possible_value_generator/show/' . $this->db->insert_id());
    }

    public function show($id_isi_form)
    {
        // mengambil data dari db
        $data_form = $this->isi_form->get_where(['id_isi' => $id_isi_form])->row();

        // mengdecode data isi dari form hasil generate dari db
        $form = json_decode($data_form->isi);

        // menyiapkan data untuk di tampilkan ke view

        $data['pertanyaan1']     = $form->pertanyaan1;
        $data['pertanyaan2']     = $form->pertanyaan2;
        $data['pertanyaan3']     = $form->pertanyaan3;
        $data['pertanyaan4']     = $form->pertanyaan4;

        $data['page_title'] = 'Show Form POSSIBLE VALUE GENERATOR';

        $data['id_isi'] = $data_form->id_isi;

        // var_dump($data);
        // die();
        $this->load->view('show/possible_value_generator', $data);
    }

    public function pdf($id_isi_form)
    {
        // mengambil data dari db
        $data_form = $this->isi_form->get_where(['id_isi' => $id_isi_form])->row();

        // mengdecode data isi dari form hasil generate dari db
        $form = json_decode($data_form->isi);

        // menyiapkan data untuk di tampilkan ke view

        $data['pertanyaan1']     = $form->pertanyaan1;
        $data['pertanyaan2']     = $form->pertanyaan2;
        $data['pertanyaan3']     = $form->pertanyaan3;
        $data['pertanyaan4']     = $form->pertanyaan4;

        $data['page_title'] = 'Show Form POSSIBLE VALUE GENERATOR';

        // var_dump($data);
        // die();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "POSSIBLE VALUE GENERATOR-" . date('d M Y') . ".pdf";

        $this->pdf->load_view('pdf/possible_value_generator', $data);
    }
}
