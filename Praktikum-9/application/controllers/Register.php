<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $data = [];

        $this->load->view('login/register', $data);
    }
    public function save()
    {

        $this->load->model('User_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');


        $data = array(
            "username" => $_username,
            "password" => md5($_password),
            "email" => $_email,
            "role" => $_role
        );

        // $data_regis[] = $_id;
        // $data_regis[] = $_username;
        // $data_regis[] = $_password;
        // $data_regis[] = $_email;
        // $data_regis[] = $_role;
        // $data_regis[] = $_created_at;
        // $data_regis[] = $_last_login;

        // $this->user->save($data_regis);
        $this->User_model->input_data($data, 'user');
        redirect(site_url() . "/register/berhasil");
    }
    public function berhasil()
    {
        $this->load->view('login/berhasil');
    }
}
