<?php

require_once 'controller/LopController.php';

$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'index':
    case 'create':
    case 'store':
    case 'edit':
    case 'update':
    case 'delete':
        (new LopController())->$action();
        break;
    default:
        echo "Nhập linh ta linh tinh gì vậy!";
        break;
}
