<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('form_model', 'form');
        $this->load->model('isi_form_model', 'isi_form');
        $this->load->model('User_model', 'user');
        $this->load->model('Perusahaan_model', 'perusahaan');
        $this->load->helper('security');
        if ($this->session->userdata('status') != 'admin') {
            echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
            redirect('admin/login', 'refresh');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Admin Dashboard | Program Form';
        $data['perusahaan'] = $this->perusahaan->get_all()->num_rows();
        $data['user'] = $this->user->get_all()->num_rows();

        $this->load->view('admin/dashboard', $data);
    }
}
