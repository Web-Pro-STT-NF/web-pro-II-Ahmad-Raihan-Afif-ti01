<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $list_mhs = $this->mhs->getAll();
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }
    public function view()
    {
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $data['mhs'] = $this->mahasiswa->findByid($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layout/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Kelola Mahasiswa';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $this->load->model("mahasiswa_model", "mahasiswa");

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi_kode = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit'); //hideen field

        $data_mhs[] = $_nim;  //? 1
        $data_mhs[] = $_nama;  //? 2
        $data_mhs[] = $_gender;  //? 3
        $data_mhs[] = $_tmp_lahir;  //? 4
        $data_mhs[] = $_tgl_lahir;  //? 5
        $data_mhs[] = $_prodi_kode;  //? 6
        $data_mhs[] = $_ipk;  //? 7

        if (isset($_idedit)) {
            $data_mhs[] = $_idedit; // ? 8
            $this->mahasiswa->update($data_mhs);
        } else {
            $this->mahasiswa->save($data_mhs);
        }

        redirect(base_url() . 'index.php/mahasiswa/view?id=' . $_nim, 'refresh');
    }
    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model", "mahasiswa");
        $mhsedit = $this->mahasiswa->findById($_id);

        $data['judul'] = 'Form Update Mahasiswa';
        $data['mhsedit'] = $mhsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update', $data);
        $this->load->view('layout/footer');
    }
    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("mahasiswa_model", "mahasiswa");
        $this->mahasiswa->delete($_id);
        redirect(base_url() . 'index.php/mahasiswa', 'refresh');
    }
    public function upload()
    {
        // $this->load->library('upload');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10024;
        $config['max_width']            = 6000;
        $config['max_height']           = 6000;


        $_nim = $this->input->post('nim');
        $array = explode('.', $_FILES['fotomhs']['name']);
        $extension = end($array);

        // die(print_r($_FILES));
        $new_name = $_nim . '.' . $extension;


        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotomhs')) {
            $error = array('error' => $this->upload->display_errors());
            // die(print_r($error));
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('mahasiswa_model','mahasiswa');
            $array_data[]=$new_name;
            $array_data[]=$_nim;
            $this->mahasiswa->upload_foto($array_data);
            
            // $data = array('upload_data' => $this->upload->data());
            // // $this->load->view('upload_success', $data);
        }
        redirect(base_url() . 'index.php/mahasiswa/view?id=' . $_nim);
    }
}
