<?php 
include('../koneksi/koneksi.php');
session_start();

$id_komplain = $_GET['data'];
$status = "Selesai";

$sql =  "UPDATE `complain` SET `status` = '$status' WHERE `angka_random` = '$id_komplain'"; 
$query=mysqli_query($koneksi,$sql);

header('location:status_komplain.php');

?>