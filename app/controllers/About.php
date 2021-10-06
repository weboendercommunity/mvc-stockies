<?php
class About extends Controller
{

    public function index($nama = "Sheva", $umur = 20)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;

        $data['title'] = "About";
        $this->view('layouts/header',$data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }
    
}