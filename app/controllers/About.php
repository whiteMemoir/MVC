<?php 

class About extends Controller{
    public function index($nama = 'PITM'){

        $data['nama'] = $nama;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');


    }
    public function page(){

        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}