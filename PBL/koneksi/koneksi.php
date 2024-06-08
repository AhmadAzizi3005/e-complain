<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost","root","","e-complain");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
$default_now = date("Y-m-d H:i:s");
?>
