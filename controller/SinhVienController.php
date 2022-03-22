<?php

class SinhVienController
{
    public function index() : void
    {
        require_once 'model/SV.php';
        $arr= (new SV())->all();
        require_once 'view/sinh_vien/index.php';
    }

    public function create() : void
    {
        require_once 'model/Lop.php';
        $lops= (new Lop())->all();
        require_once 'view/sinh_vien/create.php';
    }

    public function store() : void
    {
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require_once 'model/SV.php';
        (new SV())->create($ten, $ma_lop);
        header('location:index.php?controller=sinh_vien');
    }

    public function edit() : void
    {
        $ma = $_GET['ma'];
        require_once 'model/SV.php';
        $each= (new SV())->find($ma);
        require_once 'model/Lop.php';
        $lops= (new Lop())->all();
        require_once 'view/sinh_vien/edit.php';
    }

    public function update() : void
    {
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];

        require_once 'model/SV.php';
        (new SV())->update($ma, $ten, $ma_lop);
        header('location:index.php?controller=sinh_vien');
    }

    public function delete() : void
    {
        $ma = $_GET['ma'];
        require_once 'model/SV.php';
        (new SV())->destroy($ma);
        header('location:index.php?controller=sinh_vien');
    }
}