<?php
$datasiswa = [
    ["Joni Susanto", "XII TKR 2", "Pemalang"] , ["Intan Ayu", "XII TB 1", "Brebes"] , ["Salma Karima","XI RPL 1", "Batang"]
];
$i = 1
?>

<!DOCTYPE html>
<html >
<head>
    <title>ch4b</title>
</head>
<body>
    <table>
        <table  border = "1" cellspacing = "0" cellpadding = "8">
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Alamat</td>
            </tr>
            <?php foreach ($datasiswa as $x) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $x [0] ?></td>
                    <td><?= $x [1] ?></td>
                    <td><?= $x [2] ?></td>
                </tr>
                <?php endforeach; ?>
    </table>
</body>
</html>