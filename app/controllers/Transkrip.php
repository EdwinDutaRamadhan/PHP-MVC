<?php

class Transkrip extends Controller{
    public function index(){
        $data['judul'] = 'Transkrip Mahasiswa';
        $data['transkrip'] = $this->model('Transkrip_model')->getTranskrip();
        $this->view('templates/header', $data);
        $this->view('transkrip/index', $data);
        $this->view('templates/footer');
    }
}