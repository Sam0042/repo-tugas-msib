<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />
    <title>Document</title>
</head>
<body class="bg-primary">
    <h1 class="text-center mt-5 text-light"><b>TOKO ELEKTRONIK KOH ACENG</b></h1>
        <form method="POST" action="index.php" class="container col-4 mt-4 shadow-lg p-3 mb-5 bg-body rounded-3">
            <h1 class="text-center mb-3 fs-2">FORM BELANJA</h1>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form1Example1" name="nama" class="form-control" required/>
                <label class="form-label" for="form1Example1">Nama Pelanggan</label>
            </div>
            <div  class="form-outline mb-4">
                <select class="form-select" aria-label="Default select example" name="produk" required>
                    <option value="" selected>--- Pilih Produk ---</option>
                    <option value="TV">TV</option>
                    <option value="Kulkas">Kulkas</option>
                    <option value="Mesin Cuci">Mesin Cuci</option>
                    <option value="AC">AC</option>
                </select>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="number" id="form1Example1" class="form-control" name="jumlahBeli"  required/>
                <label class="form-label" for="form1Example1">Jumlah Beli</label>
            </div>


            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" value="kirim" name="kirim" class="btn btn-primary btn-block">Kirim</button>
                </div>
            </div>
        </form>
        <?php if(isset($_POST["kirim"])){?>
            <div class="container col-4 shadow-lg p-3 mt-4 mb-5 bg-body rounded-3">
                <?php
                    $nama = $_POST["nama"]; 
                    $produk = $_POST["produk"]; 
                    $jumlahBeli = $_POST["jumlahBeli"]; 
                ?>
                <h1 class="text-center mb-3 fs-2">STRUK PEMBELIAN</h1>
                <div class="container ps-">
                    <h3 class="fs-5">Nama Pelanggan: <?= $nama ?> </h3>
                    <h3 class="fs-5">Produk Pilihan: <?= $produk ?> </h3>
                    <h3 class="fs-5">Jumlah Beli: <?= $jumlahBeli ?> </h3>
                    <h3 class="fs-5">Harga Satuan: <?php
                    if($_POST["produk"] == "TV"){
                        $hargaSatuan = 1250000;
                    }
                    elseif($_POST["produk"] == "Kulkas"){
                        $hargaSatuan = 8400000;
                    }
                    elseif($_POST["produk"] == "Mesin Cuci"){
                        $hargaSatuan = 7999000;
                    }
                    elseif($_POST["produk"] == "AC"){
                        $hargaSatuan = 5000000;
                    }
                    else{
                        $hargaSatuan=0; //harus di fix
                    }
                    echo "Rp.".$hargaSatuan;

                    $totalBelanja = $jumlahBeli*$hargaSatuan;
                    $diskon = 0.20*$totalBelanja; //20%
                    $ppn = 0.10*($totalBelanja-$diskon);
                    $hargaBersih = ($totalBelanja-$diskon)+$ppn;
                ?> </h3>
                
                    <h3 class="fs-5">Total Belanja: Rp.<?= $totalBelanja ?> </h3>
                    <h3 class="fs-5">Potongan Diskon: Rp.<?= $diskon ?> </h3>
                    <h3 class="fs-5">PPN: Rp.<?= $ppn ?> </h3>
                    <h3 class="fs-5">Harga Bersih: Rp.<?= $hargaBersih ?> </h3>
                </div>

            </div>
        <?php } ?>
</body>
<footer>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Hisyammubarak.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
</html>