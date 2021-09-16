<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_form', 'form');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['form'] = $this->form->get_form()->row();
        $data['isi'] = $this->form->get_isi()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/layout/footer');
    }
    public function test()
    {
        $data['form'] = $this->form->get_form()->row();
        $data['isi'] = $this->form->get_isi()->row();
        $this->load->view('user/layout/header');
        $this->load->view('user/layout/sidebar');
        $this->load->view('user/tes', $data);
        $this->load->view('user/layout/footer');
    }
}
