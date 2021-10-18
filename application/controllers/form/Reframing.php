<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reframing extends CI_Controller
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
        $form = $this->form->get_where(['nama_form' => 'Reframing'])->row();
        // mengecek apakah si user sudah mengisi form atau belum
        $where = [
            'id_form' => $form->id_form,
            'id_user' => $this->session->userdata('id')
        ];
        $isi = $this->isi_form->get_where($where)->row();

        if (isset($isi)) {
            redirect('form/reframing/show/' . $isi->id_isi);
        }

        $data['page_title'] = 'Reframing';
        $this->load->view('form/reframing', $data);
    }

    public function save()
    {
        $this->check_user();

        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Reframing'])->row();

        // mengambil data dari inputan user
        $data['pertanyaan1']     = $this->input->post('pertanyaan1');
        $data['pertanyaan2']     = $this->input->post('pertanyaan2');
        $data['pertanyaan3']     = $this->input->post('pertanyaan3');
        $data['pertanyaan4']     = $this->input->post('pertanyaan4');
        $data['pertanyaan5']     = $this->input->post('pertanyaan5');
        $data['pertanyaan6']     = $this->input->post('pertanyaan6');

        // data yang akan di masukan ke db
        $form_reframing['isi'] = json_encode($data); // mengencode data inputan user
        $form_reframing['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan
        $form_reframing['id_user'] = $this->session->userdata('id');

        $this->isi_form->save($form_reframing);
        redirect('/form/reframing/show/' . $this->db->insert_id());
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

        $data['page_title'] = 'Show Form Reframing';

        $data['id_isi'] = $data_form->id_isi;

        // var_dump($data);
        // die();
        $this->load->view('show/reframing', $data);
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
        $data['page_title'] = 'Show Form Reframing';

        // var_dump($data);
        // die();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Reframing-" . date('d M Y') . ".pdf";

        $this->pdf->load_view('pdf/reframing', $data);
    }
}
