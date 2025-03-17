<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
<div class="add">
    <h2>Tambah Data Mahasiswa</h2>
    
    <form action="tambah.php" method="post">
        <div class="fmhs">
            <label for="NPM">NIM:</label>
            <input type="text" id="NPM" name="NPM" required><br>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>
            <input type="submit" name="submit" value="Tambah Data">
            <a href="create.php">Cek Data</a>
        </div>
</body>
</html>
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "tes5";
$koneksi = mysqli_connect($host, $user, $password, $database);

if(isset($_POST['submit'])){
    $NPM = $_POST['NPM'];
    $nama = $_POST['nama'];
   
    $query = "INSERT INTO mahasiswa (NPM, nama) VALUES ('$NPM',
    '$nama')";
    mysqli_query($koneksi, $query);
    echo "Data berhasil ditambahkan.";
    }

?>
