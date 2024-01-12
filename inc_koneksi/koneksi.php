<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "simak_kampus";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn){
    die("koneksi gagal");
}
?>