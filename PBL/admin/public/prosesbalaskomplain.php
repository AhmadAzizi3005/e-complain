<?php 
include("../../koneksi/koneksi.php"); 
$id_komplain = $_POST['id_komplain'];
$tgl_proses = $_POST['tanggal_proses'];
$sts = $_POST['status_complain'];
$deskripsi_penanganan = $_POST['deskripsi_penanganan'];
$nama_admin = $_POST['nama_admin'];

if ($_FILES['lampiran_admin']['name'] == "") {
    $gambar_baru = "-";
} else {
	$gambar = $_FILES['lampiran_admin']['name'];
    $tmp = $_FILES['lampiran_admin']['tmp_name'];
    $gambar_baru = $gambar;
    $path="assets/gambar/".$gambar_baru;
    move_uploaded_file($tmp, $path);
}

$sql = mysqli_query($koneksi,"UPDATE `complain` SET `status`='$sts', `tgl_proses` = '$tgl_proses', `deskripsi_penanganan` = '$deskripsi_penanganan', `nama_admin` = '$nama_admin', `lampiran_admin` = '$gambar_baru' WHERE `angka_random` = '$id_komplain' ");

if($sql){
	header("location:tables.php?status=".$sts."&notif=editberhasil");
}


?>