<?php

class Sample extends Controller
{

    public function index()
    {
        $data['title'] = "SAMPLE";

        $data['samples'] = $this->model('SampleModel')->getAllSample();

        $this->view('layouts/header', $data);
        $this->view('sample/index', $data);
        $this->view('layouts/footer');
    }

    public function show(int $id)
    {
        $data['title'] = "SAMPLE";

        $data['sample'] = $this->model('SampleModel')->getSampleById($id);

        $this->view('layouts/header', $data);
        $this->view('sample/show', $data);
        $this->view('layouts/footer');
    }

    public function create()
    {
        $data['title'] = "SAMPLE";
        $this->view('layouts/header', $data);
        $this->view('sample/create', $data);
        $this->view('layouts/footer');
    }

    public function store()
    {
        $this->model('SampleModel')->storeSampleData($_POST);
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASE_URL . '/sample');
        exit;
    }
       
}
