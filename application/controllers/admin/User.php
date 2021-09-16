<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('M_user', 'user');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $data['form'] = $this->form->get_form()->row();
        $data['user'] = $this->user->get_user()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('admin/layout/footer');
    }
    public function detail_user($id)
    {
        $data['detail'] = $this->user->get_detail_user($id)->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/detail_user', $data);
        $this->load->view('admin/layout/footer');
    }
    public function ajax_edit($id)
    {
        $data = $this->user->get_by_id($id);
        echo json_encode($data);
    }
    public function detail_ajax_edit($id)
    {
        $data = $this->user->detail_get_by_id($id);
        echo json_encode($data);
    }
    public function update()
    {
        $this->form_validation->set_rules(
            'perusahaan',
            'Perusahaan',
            'required|is_unique[perusahaan.nama_perusahaan]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Perusahaan sudah tersedia');
            redirect('admin/user');
        } else {
            $id = $this->input->post('id', true);
            $data = array(
                'nama_perusahaan' => $this->input->post('perusahaan', true)
            );
            $this->user->update($id, $data);
            $this->session->set_flashdata('msg', 'Data berhasil diupdate');
            redirect('admin/user');
        }
    }
    public function update_user()
    {
        $id_perusahaan = $this->input->post('id_perusahaan', true);
        $id = $this->input->post('id', true);
        if ($this->input->post('password', true) == null) {
            $password = $this->input->post('password_lama', true);
        } else {
            $password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
        }
        $data = array(
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'password' => $password
        );
        $this->user->update_user($id, $data);
        $this->session->set_flashdata('msg', 'Data berhasil diupdate');
        redirect('admin/user/detail_user/' . $id_perusahaan . '');
    }
    public function add_perusahaan()
    {
        $this->form_validation->set_rules(
            'perusahaan',
            'Perusahaan',
            'required|is_unique[perusahaan.nama_perusahaan]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Perusahaan sudah tersedia');
            redirect('admin/user');
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('perusahaan', true)
            );
            $this->user->add_perusahaan($data);
            $this->session->set_flashdata('msg', 'Data berhasil ditambah');
            redirect('admin/user');
        }
    }
    public function add_user()
    {
        $id_perusahaan = $this->input->post('id_perusahaan', true);
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[user.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_error_delimiters('<span style="font-size: 10px;color:red">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Email sudah digunakan');
            redirect('admin/user/detail_user/' . $id_perusahaan . '');
        } else {

            $data = array(
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'id_perusahaan' => $this->input->post('id_perusahaan', true)
            );
            $this->user->add_user($data);
            $this->session->set_flashdata('msg', 'Data berhasil ditambah');
            redirect('admin/user/detail_user/' . $id_perusahaan . '');
        }
    }
    public function hapus_perusahaan($id)
    {
        $this->user->delete_perusahaan($id);
        $this->user->delete_user_by_perusahaan($id);
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        redirect('admin/user');
    }
    public function hapus_user()
    {
        $id = $this->uri->segment(4);
        $id_perusahaan = $this->uri->segment(5);
        $this->user->delete_user($id);
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        redirect('admin/user/detail_user/' . $id_perusahaan . '');
    }
}
