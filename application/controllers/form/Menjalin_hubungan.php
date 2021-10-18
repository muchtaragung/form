<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menjalin_hubungan extends CI_Controller
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
        $form = $this->form->get_where(['nama_form' => 'Menjalin Hubungan'])->row();
        // mengecek apakah si user sudah mengisi form atau belum
        $where = [
            'id_form' => $form->id_form,
            'id_user' => $this->session->userdata('id')
        ];
        $isi = $this->isi_form->get_where($where)->row();

        if (isset($isi)) {
            redirect('form/menjalin_hubungan/show/' . $isi->id_isi);
        }

        $data['page_title'] = 'Menjalin Hubungan';
        $this->load->view('form/menjalin_hubungan', $data);
    }

    public function save()
    {
        $this->check_user();

        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Menjalin Hubungan'])->row();

        // mengambil data dari inputan user
        $data['pertanyaan1']     = $this->input->post('pertanyaan1');
        $data['pertanyaan2']     = $this->input->post('pertanyaan2');
        $data['pertanyaan3']     = $this->input->post('pertanyaan3');
        $data['pertanyaan4']     = $this->input->post('pertanyaan4');
        $data['pertanyaan5']     = $this->input->post('pertanyaan5');
        $data['pertanyaan6']     = $this->input->post('pertanyaan6');
        $data['pertanyaan7']     = $this->input->post('pertanyaan7');
        $data['pertanyaan8']     = $this->input->post('pertanyaan8');
        $data['pertanyaan9']     = $this->input->post('pertanyaan9');
        $data['pertanyaan10']     = $this->input->post('pertanyaan10');
        $data['pertanyaan11']     = $this->input->post('pertanyaan11');
        $data['pertanyaan12']     = $this->input->post('pertanyaan12');
        $data['pertanyaan13']     = $this->input->post('pertanyaan13');
        $data['pertanyaan14']     = $this->input->post('pertanyaan14');
        $data['pertanyaan15']     = $this->input->post('pertanyaan15');

        // data yang akan di masukan ke db
        $form_menjalin_hubungan['isi'] = json_encode($data); // mengencode data inputan user
        $form_menjalin_hubungan['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan
        $form_menjalin_hubungan['id_user'] = $this->session->userdata('id');

        $this->isi_form->save($form_menjalin_hubungan);
        redirect('/form/menjalin_hubungan/show/' . $this->db->insert_id());
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
        $data['pertanyaan5']     = $form->pertanyaan5;
        $data['pertanyaan6']     = $form->pertanyaan6;
        $data['pertanyaan7']     = $form->pertanyaan7;
        $data['pertanyaan8']     = $form->pertanyaan8;
        $data['pertanyaan9']     = $form->pertanyaan9;
        $data['pertanyaan10']     = $form->pertanyaan10;
        $data['pertanyaan11']     = $form->pertanyaan11;
        $data['pertanyaan12']     = $form->pertanyaan12;
        $data['pertanyaan13']     = $form->pertanyaan13;
        $data['pertanyaan14']     = $form->pertanyaan14;
        $data['pertanyaan15']     = $form->pertanyaan15;

        $data['page_title'] = 'Show Form Menjalin Hubungan';

        $data['id_isi'] = $data_form->id_isi;

        // var_dump($data);
        // die();
        $this->load->view('show/menjalin_hubungan', $data);
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
        $data['pertanyaan5']     = $form->pertanyaan5;
        $data['pertanyaan6']     = $form->pertanyaan6;
        $data['pertanyaan7']     = $form->pertanyaan7;
        $data['pertanyaan8']     = $form->pertanyaan8;
        $data['pertanyaan9']     = $form->pertanyaan9;
        $data['pertanyaan10']     = $form->pertanyaan10;
        $data['pertanyaan11']     = $form->pertanyaan11;
        $data['pertanyaan12']     = $form->pertanyaan12;
        $data['pertanyaan13']     = $form->pertanyaan13;
        $data['pertanyaan14']     = $form->pertanyaan14;
        $data['pertanyaan15']     = $form->pertanyaan15;

        $data['page_title'] = 'Show Form Menjalin Hubungan';

        // var_dump($data);
        // die();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Menjalin Hubungan-" . date('d M Y') . ".pdf";

        $this->pdf->load_view('pdf/menjalin_hubungan', $data);
    }
}
