<?php

require_once 'controller/SinhVienController.php';

$controller = $_GET['controller'] ?? 'base';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'base':
        require 'view/menu.php';
        break;
    case 'lop':
        switch ($action) {
            case 'index':
                require_once 'controller/LopController.php';
                (new LopController())->index();
                break;
            case 'create':
                require_once 'controller/LopController.php';
                (new LopController())->create();
                break;
            case 'store':
                require_once 'controller/LopController.php';
                (new LopController())->store();
                break;
            case 'edit':
                require_once 'controller/LopController.php';
                (new LopController())->edit();
                break;
            case 'update':
                require_once 'controller/LopController.php';
                (new LopController())->update();
                break;
            case 'delete':
                require_once 'controller/LopController.php';
                (new LopController())->delete();
                break;
            default:
                echo "Nhập linh ta linh tinh gì vậy!";
                break;
        }
        break;
    case 'sinh_vien':
        switch ($action) {
            case 'index':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->index();
                break;
            case 'create':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->create();
                break;
            case 'store':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->store();
                break;
            case 'edit':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->edit();
                break;
            case 'update':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->update();
                break;
            case 'delete':
                require_once 'controller/SinhVienController.php';
                (new SinhVienController())->delete();
                break;
            default:
                echo "Nhập linh ta linh tinh gì vậy!";
                break;
        }
        break;
    default:
        echo "Nhập controller linh ta linh tinh rồi!";
}


