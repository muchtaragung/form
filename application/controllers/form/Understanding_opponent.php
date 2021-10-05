<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Understanding_opponent extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
    }

    public function index()
    {
        $data['page_title'] = 'Understanding Opponent';
        $this->load->view('form/understanding_opponent', $data);
    }

    public function save()
    {
        // mengambil tipe form
        $form = $this->form->get_where(['nama_form' => 'Understanding Opponent'])->row();

        // mengambil data dari inputan user
        $data['goal']      = $this->input->post('goal');
        $data['interest']  = $this->input->post('interest');
        $data['saw']       = $this->input->post('saw');
        $data['informasi'] = $this->input->post('informasi');
        $data['bagaimana'] = $this->input->post('bagaimana');

        // data yang akan di masukan ke db
        $form_uo['isi'] = json_encode($data); // mengencode data inputan user
        $form_uo['id_form'] = $form->id_form; // id dari tipe form yang akan di masukan

        $this->isi_form->save($form_uo);
        redirect('/form/understanding_opponent/show/' . $this->db->insert_id());
    }

    public function show($id_isi_form)
    {
        // mengambil data dari db
        $data_form = $this->isi_form->get_where(['id_isi' => $id_isi_form])->row();

        // mengdecode data isi dari form hasil generate dari db
        $form = json_decode($data_form->isi);

        // menyiapkan data untuk di tampilkan ke view
        $data['goal']      = $form->goal;
        $data['interest']  = $form->interest;
        $data['saw']       = $form->saw;
        $data['informasi'] = $form->informasi;
        $data['bagaimana'] = $form->bagaimana;

        $data['page_title'] = 'Show Form Understanding Opponent';

        // var_dump($data);
        // die();
        $this->load->view('show/understanding_opponent', $data);
    }
}
