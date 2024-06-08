<?php
session_start();
include("../koneksi/koneksi.php");
$nim = $_SESSION['nim'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>E-Complaint</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"
      defer
    ></script>
  </head>
  <body>
    <header>
     <?php include("includes/header.php") ?>
    </header>

    <!-- hero section -->
    <section id="statistik">
      <div class="mx-auto pb-10 pt-36">
        <div class="flex gap-5 justify-start items-start ml-[230px]">
          <a
            href="profile.php"
            onclick="window.history.back()"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-xl max-w-[100px] text-center justify-center"
          >
            Kembali
          </a>
        </div>
        <div class="flex gap-5 justify-start items-start ml-[230px] mb-8">
          <a
            href="status_komplain.php"
            class="pl-2 rounded-lg flex flex-col gap-6 w-[250px] h-10 border border-black text-black text-base justify-center items-center text-center hover:bg-black hover:text-white"
            >Semua Komplain</a
          >
          <a
            href="status_komplain.php?status=diterima"
            class="pl-2 rounded-lg flex flex-col gap-6 w-[250px] h-10 border border-black text-black text-base justify-center items-center text-center hover:bg-black hover:text-white"
            >Diterima</a
          >
          <a
            href="status_komplain.php?status=proses"
            class="pl-2 rounded-lg flex flex-col gap-6 w-[250px] h-10 border border-black text-black text-base justify-center items-center text-center hover:bg-black hover:text-white"
            >Dalam Proses</a
          >
          <a
            href="status_komplain.php?status=selesai"
            class="pl-2 rounded-lg flex flex-col gap-6 w-[250px] h-10 border border-black text-black text-base justify-center items-center text-center hover:bg-black hover:text-white"
            >Selesai</a
          >
        </div>
       
        <div class="flex flex-wrap gap-5 justify-center px-32">
        <?php 
        if(!empty($_GET['status'])){
          if($_GET['status'] == "diterima"){
            $sql = "SELECT * FROM `complain` where `nim` = '$nim' and `status` = 'Masuk' ORDER BY `tanggal` DESC"; 
          }else if($_GET['status'] == "proses"){
            $sql = "SELECT * FROM `complain` where `nim` = '$nim' and `status` = 'Proses' ORDER BY `tanggal` DESC"; 
          }else{
            $sql = "SELECT * FROM `complain` where `nim` = '$nim' and `status` = 'Selesai' ORDER BY `tanggal` DESC"; 
          }
        }else {
            $sql = "SELECT * FROM `complain` where `nim` = '$nim' ORDER BY `tanggal` DESC";
        }
            $query = mysqli_query($koneksi,$sql);
            while($data = mysqli_fetch_assoc($query)){
              $status = $data['status'];
              if($status == 'Masuk'){
                $say = "Diterima";
              }else if($status == 'Proses'){
                $say = "Dalam Proses";
              }else{
                $say = $status;
              }
              
              ?>
          <div class="pl-2 rounded-lg flex flex-col gap-6 w-[250px]  justify-center bg-blue-950 relative">
            <article class="flex flex-col gap-3 text-start">
              
              <h1 class="text-xl font-bold text-white"><?php echo $data["angka_random"]; ?></h1>
              <p class="text-base font-bold text-white truncate mb-2"><?php echo $data["pengaduan"]; ?></p>
              <?php if($status == 'Masuk'){ ?>
              <a href="rincian_pengaduan.php?status=<?php echo $status; ?>&data=<?php echo $data["angka_random"]; ?>" >
              <div class="mb-4 mt-4 bg-slate-500 text-white font-bold py-2 px-3 flex rounded-lg max-w-[120px] justify-between ">
              <p class="text-start"><?php echo $say; ?></p>
              <?php }else if($status == 'Proses'){ ?>
              <a href="rincian_pengaduan.php?status=<?php echo $status; ?>&data=<?php echo $data["angka_random"]; ?>" >
              <div class="mb-4 mt-4 bg-yellow-500 text-white font-bold py-2 px-3 flex rounded-lg max-w-[170px] justify-between">
              <p class="text-start"><?php echo $say; ?></p>     
              <?php }else if($status == 'Selesai'){ ?>
              <a href="rincian_pengaduan.php?status=<?php echo $status; ?>&data=<?php echo $data["angka_random"]; ?>" >
              <div class="mb-4 mt-4 bg-blue-500 text-white font-bold py-2 px-3 flex rounded-lg max-w-[120px] justify-between">
              <p class="text-start"><?php echo $say; ?></p>       
              <?php } ?>
              <svg
                  class=" font-bold text-white"
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-arrow-right"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                  />
                </svg>
              </div>
              </a>
            </article>
            </div>
            <?php } ?>
            </div>
      </div>
    </section>
    
    <!-- hero section end -->
    <footer class="bg-white flex justify-center w-full py-2">
      <div class="container">
        <div class="flex items-center justify-between">
          <div class="px-3">
            <p class="text-left text-lg text-blue-950">Copyright © e-Complaint Vokasi UB. All Right Reserved</p>
          </div>
          <div
            id="footer"
            class="py-5 bg-white flex lg:py-0"
          >
            <ul class="flex lg:justify-end">
              <li class="mx-5 w-8 h-8 mr-2 flex justify-center items-center border border-blue-950 rounded-full text-blue-900 hover:border-white hover:bg-blue-950 hover:text-white">
                <a
                  href="https://www.instagram.com/vokasiub/"
                  target="_blank"
                >
                  <svg
                    role="img"
                    width="16"
                    class="fill-current"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>Instagram</title>
                    <path
                      d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer> 
  </body>
</html>
