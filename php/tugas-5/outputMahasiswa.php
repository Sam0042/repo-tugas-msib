<?php
require_once "mahasiswa.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$kampus = $_POST["kampus"];
$matkul = $_POST["matkul"];
$nilai = $_POST["nilai"];

$mhs = new Mahasiswa($nama,$nim,$matkul,$kampus,$nilai);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h1 class="text-center mt-3">Daftar Nilai Ujian Mahasiswa</h1>
    <div class="container">
    <a class="btn btn-primary mt-4  " href="index.php" role="button"><-- Kembali</a>
    <table border="1px" cellpadding="10" cellspacing="0" align="center" width="70%" class="table table-dark table-striped container mt-4">
        <thead>
            <tr align="center">
                <td>No</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Kampus</td>
                <td>Mata Kuliah</td>
                <td>Nilai</td>
                <td>Grade</td>
                <td>Predikat</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <tr align="center">
                  <td>1</td>
                  <td><?=$nim?></td>
                  <td><?=$nama?></td>
                  <td><?=$kampus?></td>
                  <td><?=$matkul?></td>
                  <td><?=$nilai?></td>
                  <td><?=$mhs->getGrade()?></td>
                  <td><?=$mhs->getPredikat()?></td>
                  <td><?=$mhs->getStatus()?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
<footer>
    <p class="text-center m-auto" style="position:absolute;bottom:0;">&copy;Hisyammubarak 2024</p>
  </footer>
</html>