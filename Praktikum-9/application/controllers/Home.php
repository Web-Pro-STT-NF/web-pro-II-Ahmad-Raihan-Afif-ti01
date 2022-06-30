<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->model('Mahasiswa_model', 'mhs');
        $list_mhs = $this->mhs->getAll();
        $data['list_mhs'] = $list_mhs;

        $this->load->view('home/index', $data);
    }
}