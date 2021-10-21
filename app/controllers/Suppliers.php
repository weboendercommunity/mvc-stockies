<?php

class Suppliers extends Controller
{

    public function index()
    {
        $data['title'] = "SUPPLIERS";

        $data['suppliers'] = $this->model('SuppliersModel')->getAllSuppliers();

        $this->view('layouts/header', $data);
        $this->view('suppliers/index', $data);
        $this->view('layouts/footer');
    }

    public function show(int $id)
    {
        $data['title'] = "SUPPLIERS";

        $data['suppliers'] = $this->model('SuppliersModel')->getSuppliersById($id);

        $this->view('layouts/header', $data);
        $this->view('suppliers/show', $data);
        $this->view('layouts/footer');
    }

    public function create()
    {
        $data['title'] = "SUPPLIERS";
        $this->view('layouts/header', $data);
        $this->view('suppliers/create', $data);
        $this->view('layouts/footer');
    }

    public function store()
    {

       if( $this->model('SuppliersModel')->storeSuppliersData($_POST) > 0 ){
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASE_URL . '/suppliers');
        exit;
       }else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASE_URL . '/suppliers');
        exit;
       }
    }

    public function delete($id)
    {

        $this->model('SuppliersModel')->deleteSuppliersData($id);
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        header('Location: ' . BASE_URL . '/suppliers');
        exit;

    }
       
}
