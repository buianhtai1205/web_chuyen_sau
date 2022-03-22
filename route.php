<?php

require_once 'controller/SinhVienController.php';

$controller = $_GET['controller'] ?? 'base';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'base':
        require 'view/menu.php';
        break;
    case 'SinhVien':
        switch ($action) {
            case 'index':
                (new SinhVienController())->index();
                break;
            case 'create':
                (new SinhVienController())->create();
                break;
            case 'store':
                (new SinhVienController())->store();
                break;
            case 'edit':
                (new SinhVienController())->edit();
                break;
            case 'update':
                (new SinhVienController())->update();
                break;
            case 'delete':
                (new SinhVienController())->delete();
                break;
            default:
                echo "Nhập linh ta linh tinh gì vậy!";
                break;
        }
        break;
    case 'sinh_vien':
        switch ($action) {
            case 'index':
                (new SinhVienController())->index();
                break;
            case 'create':
                (new SinhVienController())->create();
                break;
            case 'store':
                (new SinhVienController())->store();
                break;
            case 'edit':
                (new SinhVienController())->edit();
                break;
            case 'update':
                (new SinhVienController())->update();
                break;
            case 'delete':
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


