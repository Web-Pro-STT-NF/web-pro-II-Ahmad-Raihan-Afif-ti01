<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dosen extends CI_Controller
{
    public function index()
    {

        $this->load->model('Dosen_model', 'dsn');
        $list_dsn = $this->dsn->getAll();
        $data['list_dsn'] = $list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');

        // $this->load->model('Dosen_model', 'dsn1');
        // $this->dsn1->id = 1;
        // $this->dsn1->nidn = '010001';
        // $this->dsn1->nama = 'Faiz Fikri';
        // $this->dsn1->gender = 'L';
        // $this->dsn1->pendidikan = 'S2';
        // $this->load->model('Dosen_model', 'dsn2');
        // $this->dsn2->id = 2;
        // $this->dsn2->nidn = '020001';
        // $this->dsn2->nama = 'Pandan Wangi';
        // $this->dsn2->gender = 'P';
        // $this->dsn2->pendidikan = 'S3';
        // $list_dsn = [$this->dsn1, $this->dsn2];
        // $data['list_dsn'] = $list_dsn;
        // $this->load->view('layout/header');
        // $this->load->view('layout/sidebar');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('layout/footer');
    }
}
