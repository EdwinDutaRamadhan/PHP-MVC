<?php

class About extends Controller{
    public function index($nama = 'edwin', $profesi='mahasiswa', $umur = 21){

        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/header');
    }
    public function page(){
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}