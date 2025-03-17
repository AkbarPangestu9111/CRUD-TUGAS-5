<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampil.css">
</head>
<body>
    <div class="nav">
       <div class="navi">
        <h3>Menu</h3>
     <ul>
     <li><a href="tambah.php">Insert</a></li>
        <li><a href="update.php">Update</a></li>
        <li><a href="delt.php">Delete</a></li>
     </ul>
    </div>
    </div>
   
    
    <div class="dm">
        <h2>Data mahasiswa</h2>
    </div>
    <div class="read">
        
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "tes5";
        $con = mysqli_connect($host, $user, $password, $database);
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($con, $query);
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>NPM</th>
        <th>nama</th>
        </tr>";
        while($data = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>".$data['ID']."</td>
          <td>".$data['NPM']."</td>
        <td>".$data['nama']."</td>
        
        </tr>";
        }
        echo "</table>"; 
        ?>

    </div>
</body>
</html>

