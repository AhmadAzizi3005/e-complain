<?php
    //akses file koneksi database
    include('../koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $email);
        $password = mysqli_real_escape_string($koneksi, $pass);
        
        //cek username dan password
        $sql="select `id_user`, `nim`, `level`,`foto`,`nama`,`email`,`password` from `user` 
                where `email`='$email' and
               `password`='$password'";        
        $query = mysqli_query($koneksi, $sql);

        $jumlah = mysqli_num_rows($query);
        if(empty($email)){
            header("Location:login.php?gagal=emailkosong");
        }else if(empty($pass)){
            header("Location:login.php?gagal=passkosong");
        }else if($jumlah==0){
            header("Location:login.php?gagal=emailpasssalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_user = $data[0]; //1
                $nim = $data[1]; //speradmin
                $level = $data[2];
                $foto = $data[3];
                $nama = $data[4];
                $email = $data[5];
                $password = $data[6];
                $_SESSION['id_user']=$id_user;
                $_SESSION['level']=$level;
                $_SESSION['nim']=$nim;
                $_SESSION['foto_profil']=$foto;
                $_SESSION['nama']=$nama;
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                if ($level == "admin1"){
                    header('location: ../admin/public/index.php');
                } else if($level == "admin2"){
                    header('location: ../admin/public/index.php');
                } else if($level == "super admin"){
                    header('location: ../Super Admin/public/index.php');
                }else{
                    header('location: beranda.php');
                }
            }           
        }
    }
?>
