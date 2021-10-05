<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outcome_based_thinking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
    }

    public function index()
    {
        $data['page_title'] = 'Outcome Based Thingking';
        $this->load->view('form/outcome_based_thinking', $data);
    }

    public function save()
    {
        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Outcome Based Thingking'])->row();

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
        $form_uo['isi'] = json_encode($data); // mengencode data inputan user
        $form_uo['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan

        $this->isi_form->save($form_uo);
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

        // var_dump($data);
        // die();
        $this->load->view('show/outcome_based_thinking', $data);
    }
}
