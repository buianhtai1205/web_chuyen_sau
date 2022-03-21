<?php

require_once 'controller/LopController.php';

$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'index':
        (new LopController())->index();
        break;
    case 'create':
        (new LopController())->create();
        break;
    case 'store':
        (new LopController())->store();
        break;
    case 'edit':
        (new LopController())->edit();
        break;
    case 'update':
        (new LopController())->update();
        break;
    case 'delete':
        (new LopController())->delete();
        break;
    default:
        echo "Nhập linh ta linh tinh gì vậy!";
        break;
}
