<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="upt.css">
</head>
<body>
    <div class="upd">
        <h2>Update Data Mahasiswa</h2>
        <div class="fupm">
            <form action="update.php" method="post">
                <label for="idm">Id</label>
                <select name="idm" id="idm">
                    <?php
                    
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $database = "tes5";
                    $koneksi = mysqli_connect($host, $user, $password, $database);

                    if (!$koneksi) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    
                    $query = "SELECT id FROM mahasiswa";
                    $result = mysqli_query($koneksi, $query);

                    if ($result) {
                       
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Tidak ada data</option>";
                    }

                   
                    mysqli_close($koneksi);
                    ?>
                </select><br>
                <label for="NPM">NIM:</label>
                <input type="text" id="NPM" name="NPM" required><br>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br>
                <input type="submit" name="submit" value="Update Data">
                <a href="create.php">Cek Data</a>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    
    $NPM = $_POST['NPM'];
    $nama = $_POST['nama'];
    $id = $_POST['idm'];

   
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tes5";
    $koneksi = mysqli_connect($host, $user, $password, $database);

    // Periksa koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $query = "UPDATE `mahasiswa` SET `NPM`='$NPM', `nama`='$nama' WHERE `id`='$id'";

    
    if (mysqli_query($koneksi, $query)) {
       
    } else {
       
    }

    
    mysqli_close($koneksi);
}
?>