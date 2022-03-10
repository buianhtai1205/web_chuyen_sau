<?php

$connect = mysqli_connect('localhost', 'root', '', 'j2school');
mysqli_set_charset($connect, 'utf8');

$sql = "SELECT * FROM mon_an WHERE ten = '$mon' ";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);