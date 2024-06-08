<?php
session_start();
include("../koneksi/koneksi.php");
$nim = $_SESSION['nim'];
$id_komplain = $_GET['data'];

$sql = "SELECT * FROM `user` WHERE `nim` = '$nim' ";
$query = mysqli_query($koneksi,$sql);
$profil = mysqli_fetch_array($query);
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
    <link
    href="dist/output.css"
    ``
    rel="stylesheet"
  />
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <script
  src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"
  defer
></script>
  </head>
  <body>
    <!-- nav -->
    <header>
      <nav class="fixed top-0 left-0 right-0 bg-white px-4 sm:px-20 z-40 w-full shadow-lg">
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
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php">Beranda</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php#faq">FAQ</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="komplain.php">Komplain</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="profile.php">Profil</a></li>
              <li
                class="relative ml-auto md:ml-auto mr-8 text-orange-500 font-semibold hover:text-blue-950"
                x-data="{ isOpen: false }"
              >
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="isOpen = !isOpen"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                    x-show="isOpen"
                  ></span>
                </button>
                <template x-if="isOpen">
                  <!-- Your notification menu content here -->
                  <ul class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Keluhan Terkirim</span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"> 4 </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Keluhan Dijawab </span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"> 2 </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Kata Sandi Diubah</span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">1</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>

              <li class="mr-8">
                <a
                  href="index.php"
                  id="keluar"
                  class="btn-primary bg-red-500 py-2 px-4 text-white text-base font-semibold rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                  >Keluar</a
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
        class="sm:hidden bg-white shadow-lg fixed w-full top-0 left-0 z-999"
      >
        <ul class="text-center py-4 pt-24">
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php">Beranda</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php#faq">FAQ</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="komplain.php">Komplain</a></li>
          <li class="mb-2 text-orange-500 font-semibold hover:text-blue-950"><a href="profile.php">Profil</a></li>
          <li
            class="relative ml-auto md:ml-auto mb-4 text-orange-500 font-semibold hover:text-blue-950"
            x-data="{ isOpen: false }"
          >
            <button
              class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
              @click="isOpen = !isOpen"
              aria-label="Notifications"
              aria-haspopup="true"
            >
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
              </svg>
              <!-- Notification badge -->
              <span
                aria-hidden="true"
                class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                x-show="isOpen"
              ></span>
            </button>
            <template x-if="isOpen">
              <!-- Your notification menu content here -->
              <ul class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Keluhan Terkirim</span>
                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"> 4 </span>
                  </a>
                </li>
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Keluhan Dijawab </span>
                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"> 2 </span>
                  </a>
                </li>
                <li class="flex">
                  <a
                    class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="#"
                  >
                    <span>Kata Sandi Diubah</span>
                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">1</span>
                  </a>
                </li>
              </ul>
            </template>
          </li>
          <li class="mb-2">
            <a
              href="index.php"
              id="keluar"
              class="btn-primary bg-red-500 py-2 px-4 text-white text-base font-semibold rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Keluar</a
            >
          </li>
        </ul>
      </div>
    </header>

    <!-- nav end -->
    <?php 
            $sql_a = "SELECT * FROM `complain` WHERE `nim` = '$profil[nim]' AND `angka_random` = '$id_komplain' ";
            $query_a = mysqli_query($koneksi,$sql_a);
            $data = mysqli_fetch_array($query_a); 
          
          if($_GET['status'] == "Masuk"){ ?>
    <section
      id="rincian_pengaduan"
      class="flex justify-center py-14 -space-x-12 pb-20"
    >
    <div class="p-2 mt-10 border-2 border-blue-950 rounded-lg h-full">
    <a
            href="status_komplain.php?status=diterima"
            onclick="window.history.back()"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-xl max-w-[100px] text-center justify-center"
          >
            Kembali
          </a>
      <div class="py-1 flex justify-center -space-x-14 items-center">
        <div >
            <h2 class="text-3xl text-blue-950 font-bold text-center mb-2">Rincian Pengaduan</h2>
            <div class="p-6 rounded-lg border-2 border-neutral-300 flex w-[600px] h-full justify bg-blue-950">
                <div class="px-16 flex flex-col gap-1 justify-between">
                    <label for="name" class="text-base text-white font-bold">Tanggal</label>
                      <p class="text-base text-white"><?php echo $data['tanggal'];?></p>
                    <label for="name" class="text-base text-white font-bold">ID komplain</label>
                      <p class="text-base text-white"><?php echo $data['angka_random'];?></p>
                    <label for="name" class="text-base text-white font-bold">Nama</label>
                      <p class="text-base text-white"><?php echo $profil['nama'];?></p>
                    <label for="name" class="text-base text-white font-bold">NIM</label>
                      <p class="text-base text-white"><?php echo $profil['nim'];?></p>
                    <label for="name" class="text-base text-white font-bold">Departemen</label>
                      <p class="text-base text-white"><?php echo $profil['departemen'];?></p>
                    <label for="name" class="text-base text-white font-bold">Program Studi</label>
                      <p class="text-base text-white"><?php echo $profil['prodi'];?></p>
                    <label for="name" class="text-base text-white font-bold">Email</label>
                      <p class="text-base text-white"><?php echo $profil['email'];?></p>
                    <label for="name" class="text-base text-white font-bold">Tujuan</label>
                      <p class="text-base text-white"><?php echo $data['tujuan'];?></p>
                    <label for="name" class="text-base text-white font-bold">Kategori</label>
                      <p class="text-base text-white"><?php echo $data['jenis'];?></p>
                    <label for="name" class="text-base text-white font-bold">Pengaduan</label>
                      <p class="text-base text-white"><?php echo $data['pengaduan'];?></p>
                    </div>  
            </div>
            <div class="p-6 rounded-lg bg-transparent flex flex-col gap-3 max-w-[500px] max-h-[850px] justify-center">
            <h2 class="text-xl text-blue-950 font-bold text-start">Foto Lampiran</h2>
          <img
            src="../admin/public/assets/gambar/<?php echo $data['gambar']?>"
            alt="Tidak Ada Lampiran"
            class="rounded-lg"
          />
        </div>      
      </div>
      </div>
    </section>
      <?php }else if($_GET['status'] == "Proses"){ ?>
        <section
      id="rincian_pengaduan"
      class="flex justify-center py-14 -space-x-12 pb-20"
    >
    <div class="p-2 mt-10 border-2 border-blue-950 rounded-lg h-full">
    <a
            href="status_komplain.php?status=proses"
            onclick="window.history.back()"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-xl max-w-[100px] text-center justify-center"
          >
            Kembali
          </a>
      <div class="py-1 flex justify-center -space-x-14 items-center">
        <div >
           
            <h2 class="text-3xl text-blue-950 font-bold text-center mb-2">Balasan Pengaduan</h2>
            <div class="p-6 rounded-lg border-2 border-neutral-300 flex w-[600px] h-full justify bg-blue-950">
                    <div class="px-16 flex flex-col gap-2 justify-between">
                        <label for="name" class="text-base text-white font-bold">Tanggal Pengaduan</label>
                        <p class="text-base text-white"><?php echo $data['tanggal']; ?></p>
                        <label for="name" class="text-base text-white font-bold">ID Komplain</label>
                        <p class="text-base text-white"><?php echo $data['angka_random']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Nama</label>
                        <p class="text-base text-white"><?php echo $data['nama']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Pengaduan</label>
                        <p class="text-base text-white"><?php echo $data['pengaduan']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Ditanggapi Oleh</label>
                        <p class="text-base text-white"><?php echo $data['nama_admin']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Tanggal Ditanggapi</label>
                        <p class="text-base text-white"><?php echo $data['tgl_proses']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Deskripsi Tanggapan</label>
                        <p class="text-base text-white"><?php echo $data['deskripsi_penanganan']; ?></p>
                    </div>  
            </div>
            <div class="p-6 rounded-lg bg-transparent flex flex-col gap-3 max-w-[500px] max-h-[850px] justify-center">
            <h2 class="text-xl text-blue-950 font-bold text-start">Foto Lampiran</h2>
          <img
            src="../admin/public/assets/gambar/<?php echo $data['gambar']; ?>"
            alt="Tidak Ada Lampiran"
            class="rounded-lg "
          />
        </div>
        <div class="p-6 rounded-lg bg-transparent flex flex-col gap-3 max-w-[500px] max-h-[850px] justify-center">
            <h2 class="text-xl text-blue-950 font-bold text-start">Lampiran Admin</h2>
          <img
            src="../admin/public/assets/gambar/<?php echo $data['lampiran_admin']; ?>"
            alt="Tidak Ada Lampiran"
            class="rounded-lg flex flex-warp"
          />
        </div>
        <div class="flex-col ">
              <button
              id="showAlertBtn"
              class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400 focus:outline-none focus:ring focus:border-red-300 ml-5"
            >
              Selanjutnya
            </button>
        </div>      
      </div>
      <div
    id="successAlert"
    class="mt-4 p-10 bg-red-200 border border-red-300 rounded opacity-0 transition duration-300 transform scale-0 absolute -bottom-80"
>
    <p class="text-red-700 font-semibold mt-2 text-center">Apakah jawaban sudah cukup menjawab <br>pengaduan anda?</p>
    <div class="flex justify-center items-center relative">
        <svg
            id="closeAlertBtn"
            class="w-5 h-5 absolute -top-20 right-0 text-white hover:text-black cursor-pointer"
            fill="currentColor"
            viewBox="0 0 20 20"
            role="img"
            aria-hidden="true"
        >
            <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd"
            ></path>
        </svg>
        <a href="komplain.php" class="flex justify-center items-center mr-5">
            <button class="p-2 bg-white text-black text-sm rounded-lg mt-2 font-medium hover:bg-blue-600 hover:text-white">Balas</button>
        </a>
        <a href="prosesselesai.php?data=<?php echo $data['angka_random']; ?>" class="flex justify-center items-center">
            <button class="p-2 bg-white text-black text-sm rounded-lg mt-2 font-medium hover:bg-red-600 hover:text-white">Selesai</button>
        </a>
      </div>
      </div>
    </div>
    </section>
    <?php }else{ ?>
      <section
      id="rincian_pengaduan"
      class="flex justify-center py-14 -space-x-12 pb-20"
    >
    <div class="p-2 mt-10 border-2 border-blue-950 rounded-lg h-full">
    <a
            href="status_komplain.php?status=selesai"
            onclick="window.history.back()"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-xl max-w-[100px] text-center justify-center"
          >
            Kembali
          </a>
      <div class="py-1 flex justify-center -space-x-14 items-center">
        <div >
           
            <h2 class="text-3xl text-blue-950 font-bold text-center mb-2">Balasan Pengaduan</h2>
            <div class="p-6 rounded-lg border-2 border-neutral-300 flex w-[600px] h-full justify bg-blue-950">
                    <div class="px-16 flex flex-col gap-0 justify-between">
                        <label for="name" class="text-base text-white font-bold">Tanggal Pengaduan</label>
                        <p class="text-base text-white"><?php echo $data['tanggal']; ?></p>
                        <label for="name" class="text-base text-white font-bold">ID Komplain</label>
                        <p class="text-base text-white"><?php echo $data['angka_random']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Nama</label>
                        <p class="text-base text-white"><?php echo $data['nama']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Pengaduan</label>
                        <p class="text-base text-white"><?php echo $data['pengaduan']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Ditanggapi Oleh</label>
                        <p class="text-base text-white"><?php echo $data['nama_admin']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Tanggal Ditanggapi</label>
                        <p class="text-base text-white"><?php echo $data['tgl_proses']; ?></p>
                        <label for="name" class="text-base text-white font-bold">Deskripsi Tanggapan</label>
                        <p class="text-base text-white"><?php echo $data['deskripsi_penanganan']; ?></p>
                    </div>  
            </div>
            <div class="p-6 rounded-lg bg-transparent flex flex-col gap-3 max-w-[500px] max-h-[850px] justify-center">
            <h2 class="text-xl text-blue-950 font-bold text-start">Foto Lampiran</h2>
          <img
            src="../admin/public/assets/gambar/<?php echo $data['gambar']; ?>"
            alt="service"
            class="rounded-lg"
          />
        </div>
        <div class="p-6 rounded-lg bg-transparent flex flex-col gap-3 max-w-[500px] max-h-[850px] justify-center">
            <h2 class="text-xl text-blue-950 font-bold text-start">Lampiran Admin</h2>
          <img
            src="../admin/public/assets/gambar/<?php echo $data['lampiran_admin']; ?>"
            alt="service"
            class="rounded-lg"
          />
        </div>
        <div class="flex-col ">
              <button
                          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-1 mr-3"
                          onclick="printDocument()"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-download mx-2" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
                          Print
                        </button>
        </div>       
      </div>
    </div>
    </section>
    <?php } ?>

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
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Fungsi untuk menampilkan alert ketika tombol diklik
        document.getElementById("showAlertBtn").addEventListener("click", function () {
          // Menampilkan alert dengan mengubah opacity dan scale
          document.getElementById("successAlert").classList.remove("opacity-0", "scale-0");
          document.getElementById("successAlert").classList.add("opacity-100", "scale-100");

          // Menghilangkan alert setelah beberapa detik
          // setTimeout(function () {
          //   document.getElementById("successAlert").classList.remove("opacity-100", "scale-100");
          //   document.getElementById("successAlert").classList.add("opacity-0", "scale-0");
          // }, 3000); // Hapus alert setelah 3 detik (3000 milidetik)
        });
      });
    </script>
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
    <script>
      function printDocument() {
        window.location.href = "print.php?data=<?php echo $data['angka_random']; ?>";
      }
    </script>
  </body>
  </body>
</html>
