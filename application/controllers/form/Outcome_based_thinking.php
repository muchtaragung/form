<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outcome_based_thinking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
        if ($this->session->userdata('status') != 'user') {
            echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
            redirect('admin/login', 'refresh');
        }
    }

    public function index()
    {
        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Outcome Based Thinking'])->row();
        // mengecek apakah si user sudah mengisi form atau belum
        $where = [
            'id_form' => $form->id_form,
            'id_user' => $this->session->userdata('id')
        ];
        $isi = $this->isi_form->get_where($where)->row();

        if (isset($isi)) {
            redirect('form/outcome_based_thinking/show/' . $isi->id_isi);
        }

        $data['page_title'] = 'Outcome Based Thingking';
        $this->load->view('form/outcome_based_thinking', $data);
    }

    public function save()
    {
        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Outcome Based Thinking'])->row();

        // mengambil data dari inputan user
        $data['opponent']        = $this->input->post('opponent');
        $data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
        $data['pertanyaan1']     = $this->input->post('pertanyaan1');
        $data['pertanyaan2']     = $this->input->post('pertanyaan2');
        $data['pertanyaan3']     = $this->input->post('pertanyaan3');
        $data['pertanyaan4']     = $this->input->post('pertanyaan4');
        $data['pertanyaan5']     = $this->input->post('pertanyaan5');
        $data['pertanyaan6']     = $this->input->post('pertanyaan6');

        // data yang akan di masukan ke db
        $form_obt['isi'] = json_encode($data); // mengencode data inputan user
        $form_obt['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan
        $form_obt['id_user'] = $this->session->userdata('id');

        $this->isi_form->save($form_obt);
        redirect('/form/outcome_based_thinking/show/' . $this->db->insert_id());
    }

    public function show($id_isi_form)
    {
        // mengambil data dari db
        $data_form = $this->isi_form->get_where(['id_isi' => $id_isi_form])->row();

        // mengdecode data isi dari form hasil generate dari db
        $form = json_decode($data_form->isi);

        // menyiapkan data untuk di tampilkan ke view
        $data['opponent']        = $form->opponent;
        $data['nama_perusahaan'] = $form->nama_perusahaan;
        $data['pertanyaan1']     = $form->pertanyaan1;
        $data['pertanyaan2']     = $form->pertanyaan2;
        $data['pertanyaan3']     = $form->pertanyaan3;
        $data['pertanyaan4']     = $form->pertanyaan4;
        $data['pertanyaan5']     = $form->pertanyaan5;
        $data['pertanyaan6']     = $form->pertanyaan6;

        $data['page_title'] = 'Show Form Outcome Based Thingking';

        $data['id_isi'] = $data_form->id_isi;

        // var_dump($data);
        // die();
        $this->load->view('show/outcome_based_thinking', $data);
    }

    public function pdf($id_isi_form)
    {
        // mengambil data dari db
        $data_form = $this->isi_form->get_where(['id_isi' => $id_isi_form])->row();

        // mengdecode data isi dari form hasil generate dari db
        $form = json_decode($data_form->isi);

        // menyiapkan data untuk di tampilkan ke view
        $data['opponent']        = $form->opponent;
        $data['nama_perusahaan'] = $form->nama_perusahaan;
        $data['pertanyaan1']     = $form->pertanyaan1;
        $data['pertanyaan2']     = $form->pertanyaan2;
        $data['pertanyaan3']     = $form->pertanyaan3;
        $data['pertanyaan4']     = $form->pertanyaan4;
        $data['pertanyaan5']     = $form->pertanyaan5;
        $data['pertanyaan6']     = $form->pertanyaan6;

        $data['page_title'] = 'Show Form Outcome Based Thingking';

        // var_dump($data);
        // die();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Outcome Based Thingking-" . date('d M Y') . ".pdf";

        $this->pdf->load_view('pdf/outcome_based_thinking', $data);
    }
}
