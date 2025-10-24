<?php
session_start();
if(!isset($$_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h1>Selamat Datang <?= $_SESSION['name']?></h1>
    <a href="logout.php">Logout</a>
    <form action="">
        <input type="search" name="cari" id=""><input type="submit" value="Cari">
    </form>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
        <?php
        include "koneksi.php";
        if(isset($_GET['cari'])){
            $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
            $sql = "SELECT * FROM siswa WHERE nisn=''$cari' OR nama='$cari'";
        }else{
            $sql = "SELECT * FROM siswa";
        }

        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($data = mysqli_fetch_array($query)){
            
        }
        ?>
    </table>
</body>
</html>