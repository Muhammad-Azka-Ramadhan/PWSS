<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM produk WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);
    if($sql){
        echo "Data dengan id $id berhasil dihapus";
        header("Location:produk.php");
    }
    else{
        echo "Data gagal dihapus";
    }
}
else{
    echo "<h1>Not Found</h1>";
}
?>