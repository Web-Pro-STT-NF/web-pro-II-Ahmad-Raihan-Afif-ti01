<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->nama='Matematika';
        $this->matkul1->sks = '4';
        $this->matkul1->kode= '231944';
        $this->load->model('Matakuliah_model', 'matkul2');
        $this->matkul2->nama='PPKN';
        $this->matkul2->sks = '4';
        $this->matkul2->kode= '234244';
        $list_matkul = [$this->matkul1, $this->matkul2];
        $data['list_matkul'] = $list_matkul;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }
}
