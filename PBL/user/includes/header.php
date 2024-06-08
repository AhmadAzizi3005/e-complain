 <?php 
  session_start();
  include('../koneksi/koneksi.php');
 ?>
 
 <nav class="fixed top-0 left-0 right-0 bg-white px-4 sm:px-20 z-40 w-full shadow-lg">
        <div class="flex justify-between items-center my-6">
          <div class="logo-nav">
          <a href="beranda.php" class="brand-link">
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
                        href="status_komplain.php?status=diterima"
                      >
                        <span>Keluhan Terkirim</span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"> 
                        <?php  
                        $get = mysqli_query($koneksi,"SELECT * FROM complain WHERE nim = '$_SESSION[nim]' AND status = 'Masuk' ");
                          $count = mysqli_num_rows($get);
                           echo $count; 
                           ?>
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="status_komplain.php?status=proses"
                      >
                        <span>Keluhan Diproses </span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        <?php  
                        $get = mysqli_query($koneksi,"SELECT * FROM complain WHERE nim = '$_SESSION[nim]' AND status = 'Proses' ");
                          $count = mysqli_num_rows($get);
                           echo $count; 
                           ?>
                          </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="status_komplain.php?status=selesai"
                      >
                        <span>Keluhan Selesai</span>
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        <?php  
                        $get = mysqli_query($koneksi,"SELECT * FROM complain WHERE nim = '$_SESSION[nim]' AND status = 'Selesai' ");
                          $count = mysqli_num_rows($get);
                           echo $count; 
                           ?>
                        </span>
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