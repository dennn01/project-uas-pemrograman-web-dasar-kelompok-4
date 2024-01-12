<?php
include("koneksi.php");

$nim = $_SESSION['nim'];
$query = "SELECT * FROM tb_mahasiswa WHERE nim='$nim'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data_mahasiswa = mysqli_fetch_array($result);
    $_SESSION['nim'] = $data_mahasiswa['nim'];
    $_SESSION['nama'] = $data_mahasiswa['nama'];
    $_SESSION['semester'] = $data_mahasiswa['semester'];
    $_SESSION['prodi'] = $data_mahasiswa['prodi'];
    $_SESSION['kelas'] = $data_mahasiswa['kelas'];

}

?>