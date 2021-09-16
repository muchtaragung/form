<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('admin/login');;
    }

    public function auth()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => 'Email tidak boleh kosong!')
        );
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password tidak boleh kosong!'));
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $email = htmlspecialchars($this->input->post('email'));
            $pass = htmlspecialchars($this->input->post('password'));
            $cek_login = $this->auth_model->cek_login_admin($email);

            if ($cek_login == FALSE) {
                $this->session->set_flashdata('error', 'Email yang Anda masukan tidak terdaftar.');
                redirect('admin/login');
            } else {

                if (password_verify($pass, $cek_login->password)) {
                    $this->session->set_userdata('id', $cek_login->id_admin);
                    $this->session->set_userdata('email', $cek_login->email);
                    $this->session->set_userdata('name', $cek_login->nama);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Email atau password yang Anda masukan salah.');
                    redirect('admin/login');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
