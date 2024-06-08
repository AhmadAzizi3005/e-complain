<?php 
session_start();
include('../koneksi/koneksi.php'); 
$nama=$_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("includes/head.php") ?>
  </head>
  <body>
    <!-- Navbar start-->
    <header>
     <?php include("includes/header.php") ?>
    </header>

    <!-- Navbar end-->
    <!-- hero section -->
    <section
      id="home"
      class="pt-44 relative bg-cover pb-8"
      style="background-image: url('img/ub.png')"
    >
      <div class="bg-blue-950 inset-0 absolute z-0 opacity-70"></div>
      <div class="container relative">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 pb-36 relative">
            <div class="relative z-10">
              <h2 class="text-base font-semibold text-white md:text-xl lg:text-2xl">Selamat datang, <?php echo $nama; ?></h2>
              <h1 class="text-6xl font-bold text-white mt-1 mb-10 leading-relaxed tracking-wide">LAYANAN <br />PENGADUAN <br />FAKULTAS VOKASI</h1>
              <a
                href="komplain.php"
                class="text-base text-white py-2 px-4 bg-orange-500 rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                >Ajukan Komplain</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->
    <!-- Prosedur start -->
    <section
      class="pt-10 pb-10"
      id="prosedur"
    >
      <div class="mx-auto">
        <div>
          <h2 class="text-blue-950 text-2xl font-bold text-center py-10 mb-5">Prosedur Pengaduan</h2>
        </div>
        <div class="flex gap-5 justify-center pb-10">
          <div class="p-6 rounded-lg bg-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">1. Login</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">2. Pilih Kategori dan Tulis Pengaduan</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg bg-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">3. Verifikasi Pengaduan</h4>
            </div>
          </div>
        </div>
        <div class="flex gap-5 justify-center">
          <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">4. Proses Tindak Lanjut</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 bg-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-white">5. Pemberian Feedback</h4>
            </div>
          </div>
          <div class="p-6 rounded-lg border-2 border-blue-950 flex flex-col gap-6 w-[250px] h-[180px] justify-center">
            <div class="flex flex-col gap-3 text-center">
              <h4 class="text-xl font-bold text-blue-950">6. Selesai</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Prosedur end -->
    <!-- FAQ start -->
    <section
      class="pt-5 pb-20 bg-blue-950 -z-50"
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
    
    <!-- footer -->
    <?php include("includes/footer.php") ?>
    <!--footer end  -->

   <?php include("includes/script.php") ?>
  </body>
</html>
