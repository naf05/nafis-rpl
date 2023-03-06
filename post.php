<!DOCTYPE html>
<html >
<head>
    <title>POST</title>
</head>
<body>
<h1>Halo Selamat Datang <?= $_POST ["nama"]; ?></h1>  
 
<form action = "" method="post">
    Masukkan nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
</body>
</html>