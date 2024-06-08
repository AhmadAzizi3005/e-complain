<?php
$action = $_GET['action'];

include('../koneksi/koneksi.php');

    if($action == "kirim"){
    $tanggal = $default_now;
    $nim = $_POST['nim'];
    $nama =$_POST['nama'];
    $jenis = $_POST ['jenis'];
    $tujuan = $_POST ['tujuan'];
    $pekerjaan = $_POST ['pekerjaan'];
    $query_h = mysqli_query($koneksi, "SELECT max(id_complain) AS maxID from complain ");
    $hasil = mysqli_fetch_array($query_h);

    $kode = $hasil['maxID'];
    $kode ++;

    if($jenis == "Pelayanan"){
        $ket_1 = "PL";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }
    else if($jenis == "Pembayaran & Keuangan" ){
        $ket_1 = "PK";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }
    else if($jenis == "Kurikulum & Pengajaran"){
        $ket_1 = "KP";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }
    else if($jenis == "Fasilitas & Lingkungan"){
        $ket_1 = "FL";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }
    else if($jenis == "Masalah Akademik"){
        $ket_1 = "MA";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }
    else{
        $ket_1 = "LY";
        if ($tujuan == "Departemen Bisnis dan Hospitality"){
            $ket_2 = "H";
        }else {
            $ket_2 = "KD";
        }
    }

    $kodeauto = $ket_1 . $ket_2 . sprintf("%03s", $kode);

    $pengaduan = $_POST ['pengaduan'];

    if ($_FILES['gambar']['name'] == "") {
        $gambar_baru = "-";
    } else {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $gambar_baru = $gambar;
        $path="../admin/public/assets/gambar/".$gambar_baru;
        move_uploaded_file($tmp, $path);
    }
                    
    $status = 'Masuk';

    $query = mysqli_query($koneksi, "INSERT INTO `complain`(`tanggal`, `nim`, `nama`, `jenis`, `tujuan`, `pengaduan`,`status`, `angka_random`, `gambar`, `pekerjaan`) VALUES ('$tanggal', '$nim','$nama','$jenis', '$tujuan', '$pengaduan', '$status', '$kodeauto', '$gambar_baru', '$pekerjaan')");

    if($query){
        echo "<script>alert('Complaint Berhasil Ditambahkan'); window.location ='beranda.php?nim=$nim' </script>";
    }else{
        echo mysqli_error($koneksi);
    }
   
}
?>