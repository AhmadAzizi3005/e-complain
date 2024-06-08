<?php 
session_start();
include('../../koneksi/koneksi.php');
$id_user = $_SESSION['id_user'];
$foto = $_SESSION['foto_profil'];
$nama = $_SESSION['nama'];
$level = $_SESSION['level'];
?>
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Complaint</title>
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <link rel="stylesheet" href="./assets/css/tailwind.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-purple-600 dark:bg-gray-800 md:block flex-shrink-0">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="flex justify-center items-center" href="index.php">
          <img src="assets/img/LOGIN ECOMPLAINT.png" alt="" width="150" />
        </a> 
        <div>
          
        </div>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            
            <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-400 dark:hover:text-gray-200 dark:text-gray-100"
              href="index.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Beranda</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-Yellow-500 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm text-Yellow-500 font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
              href="tables.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Kelola</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm text-white font-semibold transition-colors duration-150 hover:text-gray-400 dark:hover:text-gray-200"
              href="profil.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              <span class="ml-4">Profil</span>
            </a>
          </li>
        </ul>
        <div class="px-6 my-6">
          <a href = "logout.php" >
          <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-gray-50 focus:outline-none focus:shadow-outline-purple"
                type="button">
                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                  </path>
                </svg>

                Keluar
              </button>
              </a>
        </div>
      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
      x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
      @keydown.escape="closeSideMenu">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="flex justify-center items-center" href="index.php">
          <img src="assets/img/LOGIN ECOMPLAINT.png" alt="" width="150" />
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="index.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Beranda</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
              href="tables.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Kelola</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="profil.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              <span class="ml-4">Profile</span>
            </a>
          </li>
        </ul>
        <div class="px-6 my-6">
        <a href = "logout.php" >
          <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="button">
                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                  </path>
                </svg>

                Keluar
              </button>
              </a>
        </div>
      </div>
    </aside>
   <?php include('includes/header.php'); ?>
      </header>
      <?php 
        $id_komplain = $_GET['data'];
        $sql = "SELECT * FROM complain WHERE `angka_random` = '$id_komplain'";
        $query = mysqli_query($koneksi,$sql);
        $data = mysqli_fetch_array($query);
      ?>
      <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <form action="prosesbalaskomplain.php" method="post" enctype="multipart/form-data">
          <a href="tables.php">
            <button
                class="flex items-center mt-2 px-4 py-2 text-sm font-medium leading-5 text-white bg-blue-950 rounded-md hover:bg-purple-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800"
                type="button" >
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 15">
                  <path fill-rule="evenodd"
                  d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"
                  clip-rule="evenodd"></path>
                </svg>
                Kembali
              </button>
          </a>
          <h2 class="my-6 mt-2 text-2xl font-semibold text-blue-950 dark:text-gray-200">
            Form
          </h2>

          <!-- General elements -->
          <h4 class="mb-4 text-lg font-semibold text-blue-950 dark:text-gray-300">
            Identitas
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Id</span>
              <input
                name="id_komplain"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $data['angka_random']; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Nama</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $data['nama']; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">No.Identitas</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $data['nim']; ?>"
                readonly />
            </label>

          </div>

          <!-- Validation inputs -->
          <h4 class="mb-4 text-lg font-semibold text-blue-950 dark:text-gray-300">
            Komplain
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Invalid input -->
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Tanggal</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $data['tanggal']; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Tujuan</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $data['tujuan']; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Kategori</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Pelayanan" 
                value="<?php echo $data['jenis']; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">
                Status
              </span>
              <select
                name="status_complain"
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value="Masuk">Masuk</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
              </select>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">
                Lampiran
              </span>
              <div
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray overflow-auto flex flex-wrap">
                <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat m-2">
                <img src="assets/gambar/<?php echo $data['gambar']; ?>" alt="Tidak Ada Lampiran"
                    class="max-w-xs transition duration-300 ease-in-out hover:scale-110">
                </div>
              </div>
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-white dark:text-gray-400">Komplain</span>
              <textarea
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                rows="3" placeholder="Complaint User" readonly><?php echo $data['pengaduan']?></textarea>
            </label>
          </div>

          <!-- Inputs with icons -->
          <h4 class="mb-4 text-lg font-semibold text-blue-950 dark:text-gray-300">
            Tanggapan
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Tanggal</span>
              <input
                name="tanggal_proses"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" 
                value="<?php echo $default_now; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Diproses Oleh</span>
              <input
                name="nama_admin"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="02/12/2002" 
                value="<?php echo $nama; ?>"
                readonly />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Tanggapan</span>
              <textarea
                name="deskripsi_penanganan"
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                rows="3" placeholder="Berisi Tanggapan Admin"></textarea>
            </label>

            <label class="block mt-4 text-sm">
              <div x-data="{ showAttachment: false }">
                <label class="flex items-center gap-2">
                  <input type="checkbox" name="remember" class="rounded" x-model="showAttachment" />
                  <span class="text-sm ml-2 text-blue-950">Sisipkan Lampiran</span>
                </label>

                <div x-show="showAttachment">
                  <input type="file" id="attachment" name="lampiran_admin"
                    class="mt-2 p-2 rounded-xl border border-slate-500 w-full" />
                </div>
              </div>
          </div>

          <div class="flex justify-end space-x-4">
          <button
                class="flex items-center px-4 py-2 text-sm font-medium leading-5 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800"
                type="submit"
            >
            <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              fill-rule="evenodd"
              d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"
              clip-rule="evenodd"
            ></path>
          </svg>
                Kirim
            </button>
          </div>
          </form>
          <div class="flex justify-end mt-8 space-x-4">
            <!-- Export Icon -->
            <div>
              <button href="javascript:void(0);" onclick="printDocument()"
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-600 focus:outline-none focus:shadow-outline-purple">
              <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"
                    clip-rule="evenodd" fill-rule="evenodd" />
                  <path
                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"
                    clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
                Unduh
              </button>
            </div> 
            </div>
        </div>
        <footer class="py-4 bg-gray-100 dark:bg-gray-800">
          <div class="container mx-auto text-center text-gray-600 dark:text-gray-400 jus">
            <p class="text-base text-blue-950">Copyright © e-Complaint Vokasi UB. All Right Reserved</p>
          </div>
          </div>
        </footer>
    </div>
  </div>
  </form>
 
  <script>
    function printDocument() {
      window.location.href = "print.php?data=<?php echo $data['angka_random']?>";
    }
  </script>
</body>

  </html>