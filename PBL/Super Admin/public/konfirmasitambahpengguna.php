<?php 
include('../../koneksi/koneksi.php');
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasipass = $_POST['konfirmasipass'];
$level = $_POST['level'];
$prodi = $_POST['prodi'];
$departemen = $_POST['departemen'];
$status = $_POST['status'];

if($level == "admin1"){
    $departemen = "Bisnis dan Hospitality";
}else if($level == "admin2") {
    $departemen = "Industri Kreatif dan Digital";
}

if($level == "user"){
    if($_FILES['foto']['name'] == ""){
    $foto = "-";
    }else{
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $foto = $_FILES['foto']['name'];
    $direktori = '../../user/foto/'.$foto;
    move_uploaded_file($lokasi_file, $direktori);
    }
}else {
    if($_FILES['foto']['name'] == ""){
        $foto = "-";
        }else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $foto = $_FILES['foto']['name'];
        $direktori = '../../admin/public/assets/foto/'.$foto;
        move_uploaded_file($lokasi_file, $direktori);
        }
}

if( $password !== $konfirmasipass ){
    header("Location:tambah pengguna.php?notif=passtidaksama");
}else if (empty($email)){
    header("Location:tambah pengguna.php?notif=tambahkosong");
}else if ($level == "user"){
	$sql = "insert into `user` (`nama`, `nim`, `email`, `password`, `departemen`, `prodi`, `status`, `foto`,`level`) values ('$nama','$nim','$email','$password','$departemen','$prodi','$status','$foto','$level')";
	mysqli_query($koneksi,$sql);
	header("Location:User.php?notif=tambahberhasil");	
}else{
	$sql = "insert into `user` (`nama`, `nim`, `email`, `password`, `departemen`, `prodi`, `status`, `foto`,`level`) values ('$nama','$nim','$email','$password','$departemen','$prodi','$status','$foto','$level')";
	mysqli_query($koneksi,$sql);
	header("Location:Admin.php?notif=tambahberhasil");	
}
?>
