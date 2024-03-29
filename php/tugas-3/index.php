<?php
$arr_mhs = [
    [
        "nama"=>"Anton","nim"=>"022101","nilai"=>35
    ],
    [
        "nama"=>"Susilo","nim"=>"022102","nilai"=>60
    ],
    [
        "nama"=>"Bambang","nim"=>"022103","nilai"=>75
    ],
    [
        "nama"=>"Yudhoyono","nim"=>"022104","nilai"=>90
    ],
    [
        "nama"=>"Jusuf","nim"=>"022105","nilai"=>42
    ],
    [
        "nama"=>"Kalla","nim"=>"022106","nilai"=>68
    ],
    [
        "nama"=>"Mohammad","nim"=>"022107","nilai"=>93
    ],
    [
        "nama"=>"Hatta","nim"=>"022108","nilai"=>25
    ],
    [
        "nama"=>"Vladimir","nim"=>"022109","nilai"=>77
    ],
    [
        "nama"=>"Putin","nim"=>"022110","nilai"=>30
    ],
    [
        "nama"=>"Ahmad","nim"=>"022111","nilai"=>60
    ],
    [
        "nama"=>"Muhaimin","nim"=>"022112","nilai"=>65
    ],
    [
        "nama"=>"Luhut","nim"=>"022113","nilai"=>55
    ],
    [
        "nama"=>"Sitompul","nim"=>"022114","nilai"=>90
    ],
];

//judul tabel header pakai looping
$arr_judul = ["No","Nama Mahasiswa","NIM","Nilai","Keterangan","Grade","Predikat"];

// fungsi agregat di array
$jumlah_nilai = array_column($arr_mhs,"nilai");
$nilai_total = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_kes_nilai = count($arr_mhs);
$nilai_rata2 = $nilai_total / $jumlah_kes_nilai;
$format_nilai_rata2 = number_format($nilai_rata2,2);

$keterangan = [
    "Nilai Tertinggi"=>$nilai_tertinggi,
    "Nilai Terendah"=>$nilai_terendah,
    "Nilai Rata-rata"=>$format_nilai_rata2,
    "Jumlah Mahasiswa" => $jumlah_kes_nilai,
    "Jumlah Keseluruhan Nilai"=>$nilai_total,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body{
            background-color: wheat;
        }
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .thead-row{
            background-color: lightblue;
        }
        h3{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <h3 align="center">DAFTAR NILAI MAHASISWA</h3>
    <p align="center">Tidak Lulus = Merah</p>
    <table border="1px" cellpadding="10" cellspacing="0" align="center" width="70%">
        <thead>
            <tr align="center" class="thead-row">
                <?php
                foreach($arr_judul as $judul){ ?>
                    <th><?=$judul?></th>  
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach($arr_mhs as $mhs){
                $ket = ($mhs["nilai"]>=65)?"Lulus":"Tidak Lulus";

                if($mhs["nilai"]>=85 && $mhs["nilai"]<=100){
                    $grade = "A";
                }
                elseif($mhs["nilai"]>=70 && $mhs["nilai"]<85){
                    $grade = "B";
                }
                elseif($mhs["nilai"]>=60 && $mhs["nilai"]<70){
                    $grade = "C";
                }
                elseif($mhs["nilai"]>=40 && $mhs["nilai"]<60){
                    $grade = "D";
                }
                else{
                    $grade = "E";
                }

                switch($grade){
                    case $grade == "A":$predikat = "Memuaskan";break;
                    case $grade == "B":$predikat = "Bagus";break;
                    case $grade == "C":$predikat = "Cukup";break;
                    case $grade == "D":$predikat = "Kurang";break;
                    case $grade == "E":$predikat = "Buruk";break;
                }

                $warna = ($ket == "Lulus")?"lightgrey":"#ffb1b1";
                ?>
                <tr align="center" class="tbody-row" style="background-color:<?= $warna?>">
                    <td><?=$no++?></td>
                    <td><?=$mhs["nama"]?></td>
                    <td><?=$mhs["nim"]?></td>
                    <td><?=$mhs["nilai"]?></td>
                    <td><?=$ket?></td>
                    <td><?=$grade?></td>
                    <td><?=$predikat?></td>
                </tr>
            <?php }
            ?>
        </tbody>
        <tfoot>
                <?php
                foreach($keterangan as $ket=>$hasil){
                ?>
                    <tr style="background-color:lightblue">
                        <th colspan="4"> <?=$ket?></th>
                        <th colspan="4"> <?=$hasil?></th>
                    </tr>
                <?php }?>
        </tfoot>
    </table>
    <p align="center">&copy;Copyright By Muhammad Hisyam Mubarak</p>
</body>
</html>