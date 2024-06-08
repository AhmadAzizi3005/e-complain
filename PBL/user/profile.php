
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php 
    session_start();
    include('../koneksi/koneksi.php');
    $id_user = $_SESSION['id_user'];
    //get profil
    $sql = "select `foto`, `nama`, `nim`, `departemen`, `prodi`, `status` from `user`
     where `id_user`='$id_user'";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
	    $foto = $data[0];
      $nama = $data[1];
	    $nim = $data[2];
	    $departemen = $data[3];
      $prodi = $data[4];
      $status = $data[5];
      }
    ?>
   <?php include("includes/head.php") ?> 
  </head>
  <body>
    
    <!-- navbar start -->
    <header>
      <?php include("includes/header.php") ?>
    </header>
    <!-- navbar end -->

    <!-- hero section -->
    <section class="pt-36 pb-32 relative">
      <div class="w-[1100px] h-[300px] bg-white shadow-xl rounded-2xl mx-auto flex justify-center items-center relative">
        <img
          src="img/LOGIN ECOMPLAINT.png"
          alt=""
          width="300"
          class="absolute top-1"
        />
      </div>

      <?php  
      $query_ft1 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `nim` = '$nim' AND `status` = 'Masuk' ");
      $query_ft2 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `nim` = '$nim' AND `status` = 'Proses' ");
      $query_ft3 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `nim` = '$nim' AND `status` = 'Selesai' ");
      $query_ft4 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `nim` = '$nim' ");
      $data_ft1 = mysqli_num_rows($query_ft1);
      $data_ft2 = mysqli_num_rows($query_ft2);
      $data_ft3 = mysqli_num_rows($query_ft3);
      $data_ft4 = mysqli_num_rows($query_ft4);
      ?>
      </div>
      <div class="w-[600px] h-28 right-[258px] top-[275px] absolute bg-blue-950 rounded-lg">
        <div class="left-[68px] top-[21px] absolute text-white text-xl font-bold">Jumlah Komplain</div>
        <a
          href="status_komplain.php"
          class="px-6 py-1 left-[68px] top-2/4 absolute bg-yellow-400 rounded-lg justify-center items-center gap-2 inline-flex text-sm font-bold text-black"
        >
          Lihat
        </a>
        <div class="right-[60px] top-[40px] absolute text-white text-3xl font-bold"><?php echo $data_ft4?></div>
      </div>
      <div class="w-[600px] h-28 right-[258px] top-[400px] absolute bg-blue-950 rounded-lg">
        <div class="left-[68px] top-[21px] absolute text-white text-xl font-bold">Diterima</div>
        <a
          href="status_komplain.php?status=diterima"
          class="px-6 py-1 left-[68px] top-2/4 absolute bg-yellow-400 rounded-lg justify-center items-center gap-2 inline-flex text-sm font-bold text-black"
        >
          Lihat
        </a>
        <div class="right-[60px] top-[40px] absolute text-white text-3xl font-bold"><?php echo $data_ft1?></div>
      </div>
      <div class="w-[600px] h-28 right-[258px] top-[525px] absolute bg-blue-950 rounded-lg">
        <div class="left-[68px] top-[21px] absolute text-white text-xl font-bold">Dalam Proses</div>
        <a
          href="status_komplain.php?status=proses"
          class="px-6 py-1 left-[68px] top-2/4 absolute bg-yellow-400 rounded-lg justify-center items-center gap-2 inline-flex text-sm font-bold text-black"
        >
          Lihat
        </a>
        <div class="right-[60px] top-[40px] absolute text-white text-3xl font-bold"><?php echo $data_ft2?></div>
      </div>
      <div class="w-[600px] h-28 right-[258px] top-[650px] absolute bg-blue-950 rounded-lg">
        <div class="left-[68px] top-[21px] absolute text-white text-xl font-bold">Selesai</div>
        <a
          href="status_komplain.php?status=selesai"
          class="px-6 py-1 left-[68px] top-2/4 absolute bg-yellow-400 rounded-lg justify-center items-center gap-2 inline-flex text-sm font-bold text-black"
        >
          Lihat
        </a>
        <div class="right-[60px] top-[40px] absolute text-white text-3xl font-bold"><?php echo $data_ft3?></div>
      </div>
      <div class="w-[354px] h-[510px] left-[262px] top-[264px] absolute bg-blue-950 rounded-[25px]">
        <div class="flex justify-center items-center mt-8">
          <img
            src="foto/<?php echo $foto;?>"
            class="rounded-full object-cover w-24 h-24"
          />
        </div>
        <div class="flex justify-center items-center text-center text-white text-xl font-bold leading-relaxed"><?php echo $nama ?></div>
        <div class="flex justify-center items-center text-center text-white font-semibold leading-tight"><?php echo $nim ?></div>
        <div class="relative">
          <div class="left-[73px] top-[24px] absolute text-white text-lg font-light leading-tight">Fakultas</div>
          <div class="left-[207px] top-[24px] absolute text-white text-lg font-bold leading-tight">Vokasi</div>
          <div class="absolute left-0 right-0 bottom-0 top-12 border-b w-[330px] mx-auto border-white mt-1"></div>
        </div>
        <div class="relative">
          <div class="left-[73px] top-[72px] absolute text-white text-lg font-light leading-tight">Departemen</div>
          <div class="left-[207px] top-[72px] absolute text-white text-xs font-bold leading-tight tracking-tighter"><?php echo $departemen ?></div>
          <div class="absolute left-0 right-0 bottom-0 top-24 border-b w-[330px] mx-auto border-white mt-1"></div>
        </div>
        <div class="relative">
          <div class="left-[73px] top-[120px] absolute text-white text-lg font-light leading-tight">Program Studi</div>
          <div class="left-[207px] top-[120px] absolute text-white text-xs font-bold leading-tight tracking-tighter"><?php echo $prodi ?></div>
          <div class="absolute left-0 right-0 bottom-0 top-36 border-b w-[330px] mx-auto border-white mt-1"></div>
        </div>
        <div class="relative">
          <div class="left-[73px] top-[168px] absolute text-white text-lg font-light leading-tight">Status</div>
          <div class="left-[207px] top-[168px] absolute text-white text-lg font-bold leading-tight"><?php echo $status ?></div>
          <div class="absolute left-0 right-0 bottom-0 top-48 border-b w-[330px] mx-auto border-white mt-1"></div>
        </div>
        <div class="relative flex justify-center items-center">
          <a
            href="password.php?nim=<?php echo $nim ?>"
            class="px-6 py-2 mx-auto top-[240px] absolute bg-orange-500 rounded-lg gap-2 text-sm font-bold text-white"
          >
            Ubah Kata Sandi
          </a>
        </div>
      </div>
    </section>
    <!-- hero section end -->
    <!-- footer -->
    <footer class="bg-white flex justify-center w-full py-2 pt-72">
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
    <!-- footer end -->
    <script>
      const navbar = document.getElementById("navbar");
      const hamburger = document.getElementById("hamburger");
      const mobileMenu = document.getElementById("mobileMenu");
      const masukMobile = document.getElementById("masukMobile");

      hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      masukMobile.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
      });

      // Tambahkan event listener untuk menanggapi scroll
      window.addEventListener("scroll", () => {
        const scrollHeight = window.scrollY;
        const scrollThreshold = 100;

        if (scrollHeight > scrollThreshold) {
          navbar.classList.add("navbar-fixed");
        } else {
          navbar.classList.remove("navbar-fixed");
        }
      });
    </script>
  </body>
</html>
