<?php 
session_start();
include('../../koneksi/koneksi.php');

$id = $_GET['data'];
$sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id'";
$query_f = mysqli_query($koneksi,$sql_f);
while($data_f = mysqli_fetch_row($query_f)){
    $foto = $data_f[0];

}    
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$password = $_POST['password'];

$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = '../../user/foto/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($foto)){
            unlink("../../user/foto/$foto");
        }
            $sql = "update `user` set `nama`='$nama', `nim`='$nim', `email`='$email', `password`='$password', `foto`='$nama_file' where `id_user`='$id'";
            mysqli_query($koneksi,$sql); 
}else {
$sql = "update `user` set `nama`='$nama', `nim`='$nim', `email`='$email', `password`='$password' where `id_user`='$id'";
mysqli_query($koneksi,$sql);
}

header("Location:User.php?notif=editberhasil");


?>
