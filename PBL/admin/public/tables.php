<?php include("../../koneksi/koneksi.php");
session_start();
$id_user = $_SESSION['id_user'];
$level = $_SESSION['level'];
$foto = $_SESSION['foto_profil'];

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_complain = $_GET['data'];
		//hapus kategori blog
		$sql_dh = " DELETE from `complain` WHERE `angka_random` = '$id_complain'";
		mysqli_query($koneksi,$sql_dh);
	}
}
?>
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tables - E-Complaint</title>
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/tailwind.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body class="flex flex-col h-screen">
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
              <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
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
              <span class="ml-4">Profil</span>
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
              <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
              </path>
            </svg>
            Keluar
          </button>
          </a>
        </div>
      </div>
    </aside>
      <?php include('includes/header.php') ?>
      </header>
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Kelola
          </h2>

          <!-- With actions -->
          <?php if(!empty($_GET['status'])){
                    if($_GET['status'] == "Masuk" ) {?>
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Komplain Masuk
          </h4>
          <?php }else if($_GET['status'] == 'Proses' ) {?>
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Komplain Dalam Proses
          </h4>
          <?php }else if($_GET['status'] == 'Selesai' ) {?>
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Komplain Selesai
          </h4>
          <?php }
            }else{ ?>
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Semua Komplain
          </h4>
          <?php } ?>
          
          
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

          <div class="w-full rounded-lg shadow-xs">
            <div class="w-full ">
            <div class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                      <div class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300">
                    Komplain Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                    <div class="mb-4 text-lg font-semibold text-green-600 dark:text-green-300">
                    Komplain Berhasil Ditanggapi</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                      <div class="mb-4 text-lg font-semibold text-red-600 dark:text-green-300">
                    Komplain Berhasil Dihapus</div>
                  <?php }?>
                  <?php }?>
                </div>
              <table class="w-full min-w-full stripe hover" id="example">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3"><center>NO</th>
                    <th class="px-4 py-3"><center>Nama</th>
                    <th class="px-4 py-3"><center>Id Komplain</th>
                    <th class="px-4 py-3"><center>Nomor Induk</th>
                    <th class="px-4 py-3"><center>Status</th>
                    <!--<th class="px-4 py-3"><center>Tujuan</th>-->
                    <th class="px-4 py-3"><center>Jenis</th>
                    <!-- <th class="px-4 py-3">Pengaduan</th> -->
                    <th class="px-4 py-3"><center>Tanggal</th>
                    <th class="px-4 py-3"><center></th>
                    <th class="px-4 py-3"><center>Aksi</th>
                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                <?php 
                  if($level == "admin1"){
                    if(!empty($_GET['status'])){
                        if($_GET['status'] == "Masuk"){
                          $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Bisnis dan Hospitality' AND `status` = 'Masuk' ORDER BY `tanggal` DESC ";
                        }else if($_GET['status'] == "Proses"){
                          $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Bisnis dan Hospitality' AND `status` = 'Proses' ORDER BY `tanggal` DESC ";
                        }else if($_GET['status'] == "Selesai"){
                          $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Bisnis dan Hospitality' AND `status` = 'Selesai' ORDER BY `tanggal` DESC ";
                        }
                      }else {
                        $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Bisnis dan Hospitality' ORDER BY `tanggal` DESC ";
                      }
                    }
                  else if($level == "admin2"){
                    if(!empty($_GET['status'])){
                      if ($_GET['status'] == "Masuk") {
                        $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Industri Kreatif Dan Digital' AND `status` = 'Masuk' ORDER BY `tanggal` DESC";
                      }else if ($_GET['status'] == "Proses") {
                      $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Industri Kreatif Dan Digital' AND `status` = 'Proses' ORDER BY `tanggal` DESC";
                      }else if ($_GET['status'] == "Selesai") {
                      $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Industri Kreatif Dan Digital' AND `status` = 'Selesai' ORDER BY `tanggal` DESC";
                      }
                    }else{
                      $sql_k = "SELECT * FROM `complain` WHERE `tujuan` = 'Departemen Industri Kreatif Dan Digital' ORDER BY `tanggal` DESC";
                    }
                  }
                  
                  $query_k = mysqli_query($koneksi,$sql_k);

                  $no = 1;
                  while($data_k = mysqli_fetch_array($query_k)){
                  $nama = $data_k['nama'];
                  $sql = "SELECT * FROM `user` WHERE `nama` = '$nama'";
                  $query = mysqli_query($koneksi,$sql);
                  $data = mysqli_fetch_array($query);
                ?>
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $no++;?></p>
                    </td>
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['nama'];?></p>
                    </td>
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['angka_random'];?></p>
                    </td>
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['nim'];?></p>
                    </td>
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['pekerjaan'];?></p>
                    </td>
                   
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['jenis'];?></p>
                    </td>
                    <td class="px-4 py-3">
                          <p class="font-semibold"><center><?php echo $data_k['tanggal'];?></p>
                    </td>
                    <td class="px-4 py-3"><center>
                    <?php if($data_k['status'] == "Masuk") {?>
                    <p style="background-color:grey;color:White;padding-left:2px;padding-right:2px;padding-bottom:2px;margin-top:2px;font-size:15px;font-style:italic;">Masuk</p>
                    <?php } else if($data_k['status'] == "Proses" ){ ?>
                    <p style= "background-color:yellow;color:Black;padding-left:2px;padding-right:2px;padding-bottom:2px;margin-top:2px;font-size:15px;font-style:italic;">Dalam Proses</p>
                    <?php } else {?>
                    <p style= "background-color:Blue;color:White;padding-left:2px;padding-right:2px;padding-bottom:2px;margin-top:2px;font-size:15px;font-style:italic;">Selesai</p>
                    <?php } ?>
                    </td>
                  
                    <td class="px-4 py-3">
                      <div class="flex items-center justify-center space-x-4 text-sm">
                        <a href="forms.php?data=<?php echo $data_k['angka_random'] ?>">
                        <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
                        </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $data_k['angka_random']; ?>?'))window.location.href ='tables.php?aksi=hapus&data=<?php echo $data_k['angka_random'];?>&notif=hapusberhasil'" 
                        class="btn btn-xs btn-warning">
                        <button
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Delete"
                        >
                          <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                    </div>
                  </div>
                  </tr>
                  <?php } ?>
    
                </tbody>
              </table>
            </div>

          </div>
        </div>
        
    
    </main>
    <footer class="py-4 bg-white dark:bg-gray-800 mt-4">
      <div class="container mx-auto text-center text-gray-600 dark:text-gray-400 jus">
        <p class="text-base text-blue-950">Copyright © e-Complaint Vokasi UB. All Right Reserved</p>
      </div>
      </div>
    </footer>
    </div>
  </div>
      <script>
        function printDocument() {
          window.location.href = "printkelola.php";
        }
      </script>
     
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
          $(document).ready(function () {
            var table = $('#example')
              .DataTable({
                responsive: true,
              })
              .columns.adjust()
              .responsive.recalc()
          })
        </script>
</body>

        </html>