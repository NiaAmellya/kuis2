<?php
$host = "10.0.0.119";
$user = "admin";
$password = "N1a*Am&eLLy?a";
$db = "web_personal";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
