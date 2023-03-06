<?php

function perkenalan ($nama, $kelas, $alamat) {
    return "Nama saya $nama, Kelas $kelas, Alamat $alamat";
    
}

?>

<!DOCTYPE html>
<html >
<head>
    <title>Function</title>
</head>
<body>
    <h1><?= perkenalan ("Nafis", "IX RPL 1", "Poncol"); ?></h1>
</body>
</html>
