<?php 
$title = "Web Profile";
$nama ="Muhammad Hisyam Mubarak";
$usia = 22;
$ttl = "Jakarta/21/03/2002";
$alamat = "Kabupaten Bogor, Kec. Bojong Gede, Perumahan Taman Raya Citayam, Blok D3 No.19";
$fotoProfile = "https://media.licdn.com/dms/image/D5603AQF-h8DmFxoQkw/profile-displayphoto-shrink_800_800/0/1689034106658?e=2147483647&v=beta&t=tH97OzQYbkqtitNwfoZEFadHJn9YlRLizbeI1wdyRjA";
$nim = "0110220068";
$fb = "Facebook";
$ig = "Instagram";
$ld = "LinkedIn";
$gh = "Github";
$by = "hisyammubarak"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title class="title">Web Profile</title>
</head>
<body>
    <div class="dataDiri">
        <h1>DATA DIRI</h1>
        <div class="flex">
            <img src="<?=$fotoProfile?>" alt="">
            <div class="flex-text">
                <p>Nama: <?=$nama?></p>
                <p>Usia: <?=$usia?></p>
                <p>NIM: <?=$nim?></p>
                <p>TTL: <?=$ttl?></p>
                <p>Alamat: <?=$alamat?></p>
            </div>
        </div>
    </div>
    <div class="sosial">
        <h1>SOSIAL</h1>
        <a class="fb" target="_blank" href="https://www.facebook.com/hisyammubarak09"><?=$fb?></a>
        <a class="ig" target="_blank" href="https://www.facebook.com/hisyammubarak09"><?=$ig?></a>
        <a class="ld" target="_blank" href="https://www.facebook.com/hisyammubarak09"><?=$ld?></a>
        <a class="gh" target="_blank" href="https://www.facebook.com/hisyammubarak09"><?=$gh?></a>
    </div>
</body>
<footer>
    <div>
        <p>by <?=$by?></p>
    </div>
</footer>
</html>