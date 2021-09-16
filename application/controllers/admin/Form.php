<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('M_form', 'form');
        $this->load->model('M_user', 'user');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $data['form'] = $this->form->get_form()->row();
        $data['form'] = $this->form->get_form()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/form', $data);
        $this->load->view('admin/layout/footer');
    }
    public function akses($id)
    {
        $data['akses'] = $this->form->get_akses($id)->result();
        $data['user'] = $this->user->get_user()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/akses', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add_akses()
    {
        $id_form = $this->input->post('id_form', true);
        $this->form_validation->set_rules(
            'perusahaan',
            'Perusahaan',
            'required|is_unique[akses.id_perusahaan]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Perusahaan sudah tersedia');
            redirect('admin/form/akses/' . $id_form . '');
        } else {
            $data = array(
                'id_perusahaan' => $this->input->post('perusahaan', true),
                'id_form' => $this->input->post('id_form', true),
                'akses' => 0
            );
            $this->form->add_akses($data);
            $this->session->set_flashdata('msg', 'Data berhasil ditambah');
            redirect('admin/form/akses/' . $id_form . '');
        }
    }
}
