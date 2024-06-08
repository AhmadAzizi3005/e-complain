<?php 
session_start();
include('../koneksi/koneksi.php');

$nim = $_SESSION['nim'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Document</title>
    <link
      href="dist/output.css"
      ``
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"
      defer
    ></script>
  </head>
  <body>
    <!-- navbar start -->
    <header>
      <nav class="fixed top-0 left-0 right-0 bg-white px-20 z-50 w-full shadow-lg">
        <div class="flex justify-between items-center my-6">
          <div class="logo-nav">
            <img
              src="img/LOGIN ECOMPLAINT.png"
              alt=""
              width="100"
            />
          </div>
          <div class="nav-menu">
            <ul class="flex text-center">
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php">Beranda</a></li>
              <li class="mr-8 text-orange-500 font-semibold hover:text-blue-950"><a href="beranda.php">FAQ</a></li>
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
                        <span>Keluhan Dibalas </span>
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
        </div>
      </nav>
    </header>
    <!-- navbar end -->
    <section class="bg-white min-h-screen flex items-center justify-center">
      <!-- login -->
      <div class="bg-blue-950 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <!-- form -->
        <div class="md:w-1/2 px-16">
          <h2 class="font-bold text-3xl text-center pt-2 text-white mb-5">Ubah Kata Sandi</h2>
          
          <?php if(!empty($_GET['gagal'])){?>
          <?php if($_GET['gagal']=="passlamasalah"){?>
          <span style="color:red">Kata Sandi Lama Tidak Sesuai</span>
          <?php }else if($_GET['gagal']=="passbarukosong"){?>
          <span style="color:red">Masukkan Kata Sandi Baru</span>
          <?php }else if($_GET['gagal']=="passtidaksama"){?>
          <span style="color:red">Kata Sandi Baru dan Konfirmasi Kata Sandi Tidak Sama</span>
          <?php } ?>
          <?php }?>
          
          <form
            action="ubahpassword.php"
            method="post"
            class="flex flex-col gap-4"
          >
            <div class="relative">
            <label
                for=""
                class="mb-2 text-base font-semibold text-white"
              >
                Email
              </label>
              <input
                id="email"
                class="p-2 rounded-xl border w-full"
                type="email"
                name="email"
                placeholder=""
                value = "<?php echo $email; ?> "
                readonly
              />
            </div>
              <div class="relative">
              <label
                for=""
                class="mb-2 text-base font-semibold text-white"
              >
                Kata Sandi Lama
              </label>
              <input
                id="password-input-old"
                class="p-2 rounded-xl border w-full"
                type="password"
                name="passwordlama"
                placeholder=""
                
              />
              <svg
                id="toggle-password-old"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="grey"
                class="bi bi-eye-fill absolute top-2/3 right-3 -translate-y-1/2 cursor-pointer"
                viewBox="0 0 16 16"
              >
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
              </svg>
            </div>
            <div class="relative">
              <label
                for=""
                class="mb-2 text-base font-semibold text-white"
              >
                Kata Sandi Baru
              </label>
              <input
                id="password-input-new"
                class="p-2 rounded-xl border w-full"
                type="password"
                name="passwordbaru"
                placeholder=""
              />
              <svg
                id="toggle-password-new"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="grey"
                class="bi bi-eye-fill absolute top-2/3 right-3 -translate-y-1/2 cursor-pointer"
                viewBox="0 0 16 16"
              >
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
              </svg>
            </div>
            <div class="relative">
              <label
                for=""
                class="mb-2 text-base font-semibold text-white"
              >
                Konfirmasi Kata Sandi 
              </label>
              <input
                id="password-input-confirm"
                class="p-2 rounded-xl border w-full"
                type="password"
                name="konfirmasipassword"
                placeholder=""
              />
              <svg
                id="toggle-password-confirm"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="grey"
                class="bi bi-eye-fill absolute top-2/3 right-3 -translate-y-1/2 cursor-pointer"
                viewBox="0 0 16 16"
              >
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
              </svg>
            </div>
            <div>
            <input type="hidden" name="nim" value="<?php echo $nim; ?>" />
            </div>
            <button
              id="showAlertBtn"
              class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300"
            >
              Ganti
            </button>
          </form>
          <div
            id="successAlert"
            class="mt-4 p-10 bg-green-100 border border-green-300 rounded opacity-0 transition duration-300 transform scale-0 absolute top-1/3"
          >
            <p class="text-green-700 font-semibold mb-3">Kata Sandi berhasil diganti</p>
            <a
              href="profile.php"
              class="flex justify-center items-center"
              ><button class="p-2 bg-white text-black text-sm rounded-lg mt-2 font-medium hover:bg-slate-600 hover:text-white">Selesai</button>
            </a>
          </div>
        </div>

        <!-- image -->
        <div class="w-1/2">
          <img
            class="md:block hidden rounded-2xl"
            src="img/ic_4.png"
            alt="logo"
          />
        </div>
      </div>
    </section>
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
    <!-- footer end -->
    <script>
      function setupPasswordToggle(inputId, toggleId) {
        const passwordInput = document.getElementById(inputId);
        const togglePassword = document.getElementById(toggleId);

        togglePassword.addEventListener("click", function () {
          const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
          passwordInput.setAttribute("type", type);
        });
      }

      // Panggil fungsi untuk setup input kata sandi lama
      setupPasswordToggle("password-input-old", "toggle-password-old");

      // Panggil fungsi untuk setup input kata sandi baru
      setupPasswordToggle("password-input-new", "toggle-password-new");

      //panggil fungsu untuk setup input konfirmasi kata sandi
      setupPasswordToggle("password-input-confirm", "toggle-password-confirm");

    </script>
  </body>
</html>
