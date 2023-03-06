<?php
$datasiswa = [
    [
    "nama" => "Joni Susanto",
    "kelas" => "XII TKR 2",
    "alamat" => "Pemalang",
    ],
    [
    "nama" => "Intan Ayu",
    "kelas" => "XII TB 1",
    "alamat" => "Brebes",
    ],
    [
    "nama" => "Salma Karima",
    "kelas" => "XI RPL 1",
    "alamat" => "Batang",
    ],
];
?>

<!DOCTYPE html>
<html >
<head>
    <title>array list</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $datasiswa as $dts ) : ?>
        <ul>
            <li>Nama : <?= $dts ["nama"] ;?></li>
            <li>Kelas : <?= $dts ["kelas"] ;?></li>
            <li>Alamat : <?= $dts ["alamat"] ;?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>
