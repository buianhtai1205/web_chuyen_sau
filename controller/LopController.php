<?php

class LopController
{
    public function index() : void
    {
        require_once 'model/Lop.php';
        $arr= (new Lop())->all();
        require_once 'view/lop/index.php';
    }

    public function create() : void
    {
        require_once 'view/lop/create.php';
    }

    public function store() : void
    {
        $ten = $_POST['ten'];
        require_once 'model/Lop.php';
        (new Lop())->create($ten);
        header('location:index.php?controller=lop');
    }

    public function edit() : void
    {
        $ma = $_GET['ma'];
        require_once 'model/Lop.php';
        $each= (new Lop())->find($ma);
        require_once 'view/lop/edit.php';
    }

    public function update() : void
    {
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];

        require_once 'model/Lop.php';
        (new Lop())->update($ma, $ten);
        header('location:index.php?controller=lop');
    }

    public function delete() : void
    {
        $ma = $_GET['ma'];
        require_once 'model/Lop.php';
        (new Lop())->destroy($ma);
        header('location:index.php?controller=lop');
    }
}