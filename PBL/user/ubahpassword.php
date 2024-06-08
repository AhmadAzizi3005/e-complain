<?php
include('../koneksi/koneksi.php');

$passlama = $_POST['passwordlama'];
$passbaru = $_POST['passwordbaru'];
$konfirmasipass = $_POST['konfirmasipassword'];
$nim = $_POST['nim'];

$cekpass = "SELECT * FROM `user` WHERE `nim` = '$nim'";
$query = mysqli_query($koneksi, $cekpass);
$data = mysqli_fetch_array($query);
$password = $data['password'];

if($passlama !== $password){
    header("location:password.php?gagal=passlamasalah");
}else if(empty($passbaru)){
    header('location:password.php?gagal=passbarukosong');
}else if($passbaru !== $konfirmasipass){
    header('location:password.php?gagal=passtidaksama');
}else{
    $sql_a = "UPDATE `user` SET `password` = '$passbaru'  WHERE `nim` = '$nim'";
    $query_a = mysqli_query($koneksi, $sql_a);
}

if($query_a){
	header('location: profile.php');
}
?>