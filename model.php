<?php
$connect = mysqli_connect('localhost', 'root', '', 'j2school');
mysqli_set_charset($connect, 'utf8');


switch ($action) {
    case '':
        $sql = "SELECT * FROM sinh_vien";
        $result = mysqli_query($connect,$sql);
        break;
    case 'insert':
        $sql = "INSERT INTO sinh_vien(ten) values ('$ten') ";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "SELECT * FROM sinh_vien WHERE ma = '$ma' ";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "UPDATE sinh_vien SET ten = '$ten' WHERE ma = '$ma' ";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $sql = "DELETE FROM sinh_vien WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        break;
}
mysqli_close($connect);
