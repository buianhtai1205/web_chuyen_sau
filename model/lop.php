<?php

require_once 'model/connect.php';
$connect = connect();

function lop_index() {
    global $connect;
    $sql = "select * from lop ";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function lop_insert($ten) {
    global $connect;
    $sql = "insert into lop(ten) values('$ten')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function lop_edit($ma) {
    global $connect;
    $sql = "select * from lop where ma = '$ma' ";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $each;
}

function lop_update($ma, $ten) {
    global $connect;
    $sql = "update lop set ten = '$ten' where ma = '$ma' ";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function lop_delete($ma) {
    global $connect;
    $sql = "delete from lop where ma = '$ma' ";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}
