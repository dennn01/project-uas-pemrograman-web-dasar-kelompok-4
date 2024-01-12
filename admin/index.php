<?php
include "../inc_koneksi/koneksi.php";

$querydata = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
    Radhen Adebos</title>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">CRUD DATA MAHASISWA</span>
        </div>
    </nav>
    <div class="container">
        <br>
        <h4>
            <center>DATA MAHASISWA</center>
        </h4>
        <?php



        //Cek apakah ada kiriman form dari method post
        if (isset($_GET['id'])) {
            $id_peserta = htmlspecialchars($_GET["id"]);

            $sql = "DELETE FROM peserta WHERE id='$id' ";
            $hasil = mysqli_query($conn, $sql);

            //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
        ?>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <table class="my-3 table table-bordered">
                            <tr class="table-primary">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Program studi</th>
                                <th>Kelas</th>
                                <th>Semester</th>
                                <th colspan='2'>Aksi</th>

                            </tr>
                </thead>

                <?php
                $no = 0;
                while ($data = mysqli_fetch_array($querydata)) {
                    $no++;

                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $no; ?>
                            </td>
                            <td>
                                <?php echo $data["nama"]; ?>
                            </td>
                            <td>
                                <?php echo $data["nim"]; ?>
                            </td>
                            <td>
                                <?php echo $data["prodi"]; ?>
                            </td>
                            <td>
                                <?php echo $data["kelas"]; ?>
                            </td>
                            <td>
                                <?php echo $data["semester"]; ?>
                            </td>
                            <td>
                                <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-warning"
                                    role="button">Update</a>
                                <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-danger"
                                    role="button">Delet</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
        <tr class="table-danger">
            <br>

            <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>

</html>