<?php
include "../config.php";
$id = $_GET['id'];
$delete=mysqli_query($koneksi,"DELETE FROM user WHERE id = '$id'");
if($delete){
    $delete2=mysqli_query($koneksi,"DELETE FROM user WHERE id = '$id'");
    header('location:list.php');
}
?>