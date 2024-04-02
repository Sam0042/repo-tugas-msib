<?php
require_once "mahasiswa.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nilai Mahasiswa</title>
  </head>
  <body>
    <div class="container bg-light p-3 mt-5 rounded-3 shadow-lg p-3 mb-5 bg-body rounded" style="width:50%">
        <h1 class="text-center">Form Mahasiswa</h1>

        <div>
            <form class="container" method="POST" action="outputMahasiswa.php">
                <div class="mb-3">
                    <label for="" class="form-label ">NIM</label>
                    <input type="number" name="nim" class="form-control" id="" placeholder="Masukkan NIM" Required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label ">Nama</label>
                    <input type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama" Required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label ">Kampus</label>
                    <input type="text" name="kampus" class="form-control" id="" placeholder="Masukkan Nama Kampus" Required>
                </div>
                
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Mata Kuliah</label>
                    <select id="disabledSelect" name="matkul" class="form-select" Required>
                        <option value="">---- Pilih Mata Kuliah ----</option>
                        <option value="PHP">PHP</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="MySQL">MySQL</option>
                        <option value="Laravel">Laravel</option>
                        <option value="ReactJS">ReactJS</option>
                        <option value="ExpressJS">ExpressJS</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="NextJS">NextJS</option>
                        <option value="Pemrograman Backend">Pemrograman Backend</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Nilai</label>
                    <input type="number" name="nilai" class="form-control" id="" placeholder="Masukkan Nilai Matkul" Required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <footer>
    <p class="text-center">&copy;Hisyammubarak 2024</p>
  </footer>
</html> 