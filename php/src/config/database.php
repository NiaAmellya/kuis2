<?php
$host = "10.0.0.119";
$user = "admin";
$password = "N1a*Am&eLLy?a";
$db = "web_personal";
$port = "3306";

$kon = mysqli_connect($host, $user, $password, $db, $port);
if (!$kon) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
