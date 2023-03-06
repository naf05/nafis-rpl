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
$i = 1;
?>

<!DOCTYPE html>
<html >
<head>
    <title>ch5</title>
</head>
<body>
    <table>
     <table border = "1" cellspacing = "0" cellpadding = "8" >
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
      </tr>
      <?php foreach ( $datasiswa as $y ) :?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $y ["nama"] ?></td>
            <td><?= $y ["kelas"] ?></td>
            <td><?= $y ["alamat"] ?></td>
        </tr>
      <?php endforeach; ?>
     </table>    
</body>
</html>