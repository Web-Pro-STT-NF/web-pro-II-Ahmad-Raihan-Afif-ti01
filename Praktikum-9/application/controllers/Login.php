<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Login extends CI_Controller
{
    public function index()
    {
        $data = [];

        $this->load->view('login/index', $data);
    }
    public function otentikasi()
    {
        $this->load->model("user_model", "user");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username, $_password);
        if (isset($row)) //Jika username terdaftar di db
        {
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);

            redirect(base_url() . 'index.php/mahasiswa');
        } else  //jika username salah /password
        {
            redirect(base_url() . 'index.php/login?status=f');
        }
    }
    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/home');
    }
 
}
