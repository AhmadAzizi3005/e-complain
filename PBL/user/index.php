<!DOCTYPE html>
<html lang="en">
<?php
    include('../koneksi/koneksi.php');
    ?>

<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>E-Complaint</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="src/style.css"
    />
    <link
      href="dist/output.css"
      ``
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="src/input.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- Navbar start-->
    <header>
      <nav class="fixed top-0 left-0 right-0 bg-white px-4 sm:px-20 z-50 w-full shadow-lg">
        <div class="flex justify-between items-center my-6">
          <div class="logo-nav">
            <img
              src="img/LOGIN ECOMPLAINT.png"
              alt=""
              width="100"
            />
          </div>
          <div class="nav-menu hidden sm:flex text-center">
            <ul class="flex">
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="#home">Beranda</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="#about">Tentang Kami</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="#faq">FAQ</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="#statistik">Statistik Pengaduan</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="#prosedur">Prosedur Pengaduan</a></li>
              <li class="mr-8">
                <a
                  href="login.php"
                  id="masuk"
                  class="btn-primary bg-blue-950 py-2 px-4 text-white text-base font-semibold rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                  >Masuk</a
                >
              </li>
            </ul>
          </div>
          
          <div class="sm:hidden z-50">
            <button
              id="hamburger"
              class="text-gray-500 focus:outline-none"
            >
              <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                ></path>
              </svg>
            </button>
          </div>
        </div>
      </nav>

      <div
        id="mobileMenu"
        class="sm:hidden bg-white shadow-lg fixed w-full top-0 left-0 z-30"
      >
        <ul class="text-center py-4 pt-24">
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="#home">Beranda</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="#about">Tentang Kami</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="#faq">FAQ</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="#statistik">Statistik Pengaduan</a></li>
          <li class="mb-4 text-orange-500 font-semibold hover:text-blue-950"><a href="#prosedur">Prosedur Pengaduan</a></li>
          <li class="mb-2">
            <a
              href="login.html"
              id="masukMobile"
              class="btn-primary bg-blue-950 py-2 px-4 text-white text-base font-semibold rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Masuk</a
            >
          </li>
        </ul>
      </div>
    </header>

    <!-- Navbar end-->
    <!-- hero section -->
    <section
      id="home"
      class="pt-44 relative bg-cover pb-12 -z-10"
      style="background-image: url('img/ub.png')"
    >
      <div class="bg-blue-950 inset-0 absolute z-0 opacity-70"></div>
      <div class="container relative">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 pb-36 relative">
            <div class="relative z-10">
              <h2 class="text-base font-semibold text-white md:text-xl lg:text-2xl">Selamat datang,</h2>
              <h1 class="text-6xl font-bold text-white mt-1 mb-10 leading-relaxed tracking-wide">LAYANAN <br />PENGADUAN <br />FAKULTAS VOKASI</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->
    <!-- about start -->
    <section
      id="about"
      class="pt-14 flex justify-center py-14 -space-x-12"
    >
      <div class="mx-auto py-6 md:py-24 flex flex-col md:flex-row justify-center md:-space-x-14">
        <!-- Bagian Kiri -->
        <div class="w-full md:w-[400px]">
          <div class="mix-blend-multiply">
            <div class="p-6 rounded-lg bg-transparent flex flex-col gap-6 w-full h-[295px] justify-center">
              <img
                src="img/ic_4.png"
                alt="service"
                class="rounded-lg"
              />
            </div>
          </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="w-full md:w-[400px]">
          <div class="mix-blend-multiply">
            <div class="p-6 rounded-lg border-2 border-neutral-300 flex flex-col gap-6 w-full h-[295px] justify-center bg-blue-950 mix-blend-multiply z-50 align-center">
              <h2 class="font-bold text-white text-2xl flex items-center justify-center">Tentang Kami</h2>
              <p class="text-base font-semibold text-white text-justify">
                Aplikasi "e-complaint" (atau "aplikasi pengaduan elektronik") di Fakultas Vokasi adalah sistem yang dirancang untuk memudahkan mahasiswa, dosen, staff, atau pihak terkait dalam Fakultas Vokasi untuk mengajukan pengaduan atau
                keluhan terkait berbagai aspek kehidupan kampus, proses akademik, fasilitas, atau layanan yang disediakan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="manfaat"
      class="pb-28"
    >
      <div class="flex flex-col gap-5 justify-center md:flex-row md:gap-10">
        <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-full md:w-[400px] h-[295px] justify-center mb-10 md:mb-0">
          <img
            src="img/ic_3.png"
            alt=""
            width="64"
          />
          <article class="flex flex-col gap-3">
            <h4 class="text-blue-950 font-bold text-2xl">Memperbaiki Kualitas Layanan</h4>
            <p class="text-base text-slate-500 text-justify">
              Dengan Aplikasi ini diharapkan dapat menerima masukan dan keluhan dari pengguna, serta mengidentifikasi area dimana layanan dan fasilitas perlu ditingkatkan. <br /><br /><br />
            </p>
          </article>
        </div>

        <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-full md:w-[400px] h-[295px] justify-center mb-10 md:mb-0">
          <img
            src="img/ic_1.png"
            alt=""
            width="64"
          />
          <article class="flex flex-col gap-3">
            <h4 class="text-2xl font-bold text-blue-950">Peningkatan Transparansi</h4>
            <p class="text-base text-slate-500 text-justify">
              Aplikasi E-Complain dapat memberikan tingkat transparansi yang lebih tinggi dalam penanganan keluhan. Pengguna yang melaporkan masalah dapat memantau perkembangan dan tindakan yang diambil oleh pihak fakultas.
            </p>
          </article>
        </div>

        <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-full md:w-[400px] h-[295px] justify-center">
          <img
            src="img/ic_2.png"
            alt=""
            width="64"
          />
          <article class="flex flex-col gap-3">
            <h4 class="text-2xl font-bold text-blue-950">Efisiensi Administratif</h4>
            <p class="text-base text-slate-500 text-justify">
              Dengan aplikasi ini, pengelolaan keluhan dan permasalahan menjadi lebih terstruktur dan efisien. Data keluhan dapat dianalisis untuk mengidentifikasi tren atau masalah yang sering muncul, yang dapat membantu dalam perencanaan
              perbaikan jangka panjang.
            </p>
          </article>
        </div>
      </div>
    </section>

    <!--about end  -->
    <!-- FAQ start -->
    <section
      class="pt-5 pb-20 bg-blue-950"
      id="faq"
    >
      <div>
        <h2 class="text-white text-2xl font-bold text-center py-10">FAQ</h2>
      </div>
      <div class="flex justify-center w-full">
        <div class="container flex justify-center">
          <div class="w-2/12 flex items-center">
            <div class="w-full text-right">
              <button
                onclick="prev()"
                class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div
            id="sliderContainer"
            class="w-10/12 overflow-hidden"
          >
            <ul
              id="slider"
              class="flex w-full"
            >
              <li class="w-96 p-5 flex items-center justify-center relative group">
                <div class="border rounded-lg p-5 h-[300px] w-[350px]">
                  <h2 class="mt-2 text-xl font-bold text-center font-manrope text-white">Fasilitas</h2>
                  <p class="mt-2 text-white text-justify">“Kalau mau ke vocafe suka gajadi karena udah penuh mulu tempat duduknya. Padahal enak banget kalau ngerjain disana rasanya tenang n nyaman. Vokasi tolong tambahin meja ama tempat duduknya yaa”
                  <p>
                  <div class="overlay opacity-0 transition-opacity absolute inset-0 top-5 bg-white rounded-lg">
                  <p class="text-blue-950 font-semibold p-3 text-justify">“Haloo terimakasih sudah luangin keluhan kamu di E-Complaint Vokasi. Sebelumnya admin disini mau bantu jawab yah, bener banget vocafe tempat ternyaman di vokasi buat ngerjain tugas dan lainnya, admin akan bantu keluhan kamu dan secepatnya meja dan kursi di vocafe bertambah untuk para mahasiswa. Semoga terjawab yaa”
                  </p>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5 flex items-center justify-center relative group">
                <div class="border rounded-lg p-5 h-[300px] w-[350px]">
                  <h2 class="mt-2 text-xl font-bold text-center font-manrope text-white">Umum</h2>
                  <p class="mt-2 text-white text-justify">“Menurut aku makanan di vocafe itu kurang deh, kayak kurang jajanan-jajanan soalnya itu perlu buat mahasiswa pas lagi ngerjain tugas disana dan makanan minuman di vocafe kurang sesuai ama kantong anak-anak rantau seperti kita”
                  <p>
                  <div class="overlay opacity-0 transition-opacity absolute inset-0 top-5 bg-white rounded-lg">
                  <p class="text-blue-950 font-semibold p-3 text-justify"> “Haloo terimakasih sudah luangin keluhan kamu di E-Complaint Vokasi. Sebelumnya admin disini mau bantu jawab yah, jajanan emang yang pas yah buat nugas biar bisa sambil nyemil, admin akan bantu keluhan kamu dan secepatnya vocafe akan menyediakan jajanan-jajanan yang enak buat dicemil mahasiswa vokasi. Semoga terjawab yaa”
                  </p>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5 flex items-center justify-center relative group">
                <div class="border rounded-lg p-5 h-[300px] w-[350px]">
                  <h2 class="mt-2 text-xl font-bold text-center font-manrope text-white">Fasilitas</h2>
                  <p class="mt-2 text-white text-justify">“min, ada kelas yang sempit banget kalau buat duduk kek naik angkot itu kelas 404. Bisa tolong di tata yang lebih rapih dan jangan sebaris semua gitu. makasii”
                  </p>
                  <div class="overlay opacity-0 transition-opacity absolute inset-0 top-5 bg-white rounded-lg">
                  <p class="text-blue-950 font-semibold p-3 text-justify"> “Halo terimakasih sudah luangin keluhan kamu di E-Complaint Vokasi. Sebelumnya admin disini mau bantu jawab yah, wah ada yah kelas yang kek naik angkot, admin sebagai perwakilan vokasi minta maaf atas ketidaknyamanannya yaa, admin akan bantu keluhan kamu dan secepatnya akan merubah tata bangku menjadi lebih nyaman. Semoga terjawab yaa”
                  <p>              
                  </div>
                </div>
              </li>
              <li class="w-96 p-5 flex items-center justify-center relative group">
                <div class="border rounded-lg p-5 h-[300px] w-[350px]">
                  <h2 class="mt-2 text-xl font-bold text-center font-manrope text-white">Fasilitas</h2>
                  <p class="mt-2 text-white text-justify">“lift nya knapa suka error yah, kalau abis dibenerin pasti galama error lagi, itu kayanya ada yg merah deh jadi gabisa di run lift nya”
                  </p>
                  <div class="overlay opacity-0 transition-opacity absolute inset-0 top-5 bg-white rounded-lg">
                    <p class="text-blue-950 font-semibold p-3 text-justify">“Haloo terimakasih sudah luangin keluhan kamu di E-Complaint Vokasi. Sebelumnya admin disini mau bantu jawab yah, itu lift apa codingan yah? Mungkin teknisi nya kurang teliti dalam memperbaiki mesinnya yah, admin akan bantu keluhan kamu dan secepatnya lift akan diperbaiki. Semoga terjawab yaa”<p>
                </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="w-2/12 flex items-center">
            <div class="w-full">
              <button
                onclick="next()"
                class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ end -->
    <!-- statistik start -->
    <section id="statistik">
      <div class="mx-auto pb-10">
      <?php 
        $query_stat = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `jenis` = 'Pelayanan'");
        $data_stat = mysqli_num_rows($query_stat);
        $query_stat1 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `jenis` = 'Pembayaran & Keuangan'");
        $data_stat1 = mysqli_num_rows($query_stat1);
        $query_stat2 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `jenis` = 'Kurikulum & Pengajaran'");
        $data_stat2 = mysqli_num_rows($query_stat2);
        $query_stat3 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `jenis` = 'Fasilitas & Lingkungan'");
        $data_stat3 = mysqli_num_rows($query_stat3);
        $query_stat4 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE `jenis` = 'Masalah Akademik'");
        $data_stat4 = mysqli_num_rows($query_stat4);
        $query_stat5 = mysqli_query($koneksi, "SELECT * FROM `complain` WHERE angka_random LIKE 'LY%'");
        $data_stat5 = mysqli_num_rows($query_stat5);

      ?>
        <div>
          <h2 class="text-blue-950 text-2xl font-bold text-center py-10 mb-5">Statistik Kategori Pengaduan</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 p-5">
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat4 ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Akademik</h4>
            </article>
          </div>
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Pelayanan</h4>
            </article>
          </div>
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat1 ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Pembayaran dan Keuangan</h4>
            </article>
          </div>
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat2 ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Kurikulum dan Pengajaran</h4>
            </article>
          </div>
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat3 ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Fasilitas dan Lingkungan</h4>
            </article>
          </div>
          <div class="p-2 rounded-lg flex flex-col gap-6 w-full h-[180px] justify-center border-2 border-blue-950">
            <article class="flex flex-col gap-3 text-center">
              <h1 class="text-6xl font-bold text-blue-950 mb-5 mt-5"><?php echo $data_stat5 ?></h1>
              <h4 class="text-lg font-bold text-blue-950">Lain-Lainnya</h4>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- statistik end -->
    <!-- Prosedur start -->
    <section
      class="pt-10 pb-12 bg-blue-950"
      id="prosedur"
    >
      <div class="mx-auto">
        <div>
          <h2 class="text-white text-2xl font-bold text-center py-10 mb-10">Prosedur Pengaduan</h2>
        </div>
        <div class="flex gap-5 justify-center pb-10">
          <div class="p-6 rounded-lg bg-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">1. Login</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">2. Pilih Kategori dan Tulis Pengaduan</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg bg-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">3. Verifikasi Pengaduan</h4>
            </div>
          </div>
        </div>
        <div class="flex gap-5 justify-center">
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">4. Proses Tindak Lanjut</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 bg-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">5. Pemberian Feedback</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">6. Selesai</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Prosedur end -->
    <!-- footer -->
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
    <!--footer end  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="js/script.js"></script>
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
