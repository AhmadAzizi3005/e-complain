<?php include("../../koneksi/koneksi.php");
session_start();
$id_user = $_SESSION['id_user'];
$level = $_SESSION['level'];
$foto = $_SESSION['foto_profil'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Complaint</title>
    <link href="dist/output.css" `` rel="stylesheet" />
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section
      class="pt-24 pb-10 min-h-screen flex items-center justify-center relative"
    >
      <div
        class="container mx-auto mt-8 p-8 bg-white rounded-md shadow-md w-[1000px] h-full border-2"
      >
        <!-- Kop Surat -->
        <div class="container mx-auto flex">
          <!-- Left Column -->
          <div class="w-1/3 p-4 flex justify-center items-center">
            <img
              src="assets/img/VokasiUB.png"
              alt="Middle Image"
              class="mx-auto"
              width="120"
            />
          </div>

          <div class="w-3/3 p-5 text-center">
            <h1 class="text-lg font-bold">KEMENTERIAN PENDIDIKAN,</h1>
            <h1 class="text-lg font-bold">KEBUDAYAAN, RISET, DAN TEKNOLOGI</h1>
            <h1 class="text-lg font-bold">UNIVERSITAS BRAWIJAYA</h1>
            <h1 class="text-lg font-bold">FAKULTAS VOKASI</h1>
            <p>Jl. Veteran 12-16 Malang 65145</p>
          </div>

          <!-- Right Column for another Image -->
          <div class="w-1/3 p-4 flex justify-center items-center">
            <img
              src="assets/img/logo.png"
              alt="Right Image"
              class="mx-auto"
              width="80"
            />
          </div>
        </div>
        <div class="border-2 w-full mx-auto border-black"></div>

        <!-- Isi Surat -->
        <div>
          <div class="text-center mt-2">
            <h3 class="text-base font-bold">SURAT LAPORAN</h3>
            <h3 class="text-base font-bold">FAKULTAS VOKASI</h3>
            <h3 class="text-base font-bold">UNIVERSITAS BRAWIJAYA</h3>
            <h3 class="text-base font-bold">TAHUN 2023</h3>
          </div>
        </div>
        <div class="container mx-auto mt-8">
          <div>
            <table class="border-collapse w-full">
              <thead>
                <tr>
                  <th class="border border-gray-300 p-4">ID Komplain</th>
                  <th class="border border-gray-300 p-4">Nama</th>
                  <th class="border border-gray-300 p-4">Nomor Identitas</th>
                  <th class="border border-gray-300 p-4">Status</th>
                  <th class="border border-gray-300 p-4">Jenis</th>
                  <th class="border border-gray-300 p-4">Tanggal</th>
                  <th class="border border-gray-300 p-4">Status Komplain</th>
                </tr>
              </thead>
              <tbody>
              <?php if($level == "admin1"){
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

                ?>
                <tr>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['angka_random']; ?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['nama']; ?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['nim']; ?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['pekerjaan']; ?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['jenis']; ?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data_k['tanggal']; ?></td>
                  <td class="border border-gray-300 p-4"><center>
                  <?php if ($data_k['status'] == "Masuk"){ ?>
                    <div
                      class="bg-gray-500 text-white font-bold py-2 px-3 flex rounded-sm w-auto justify-center"
                    >
                      Masuk
                    </div>
                  <?php }else if ($data_k['status'] == "Proses"){ ?>
                    <div
                      class="bg-yellow-500 text-white font-bold py-2 px-3 flex rounded-sm w-auto justify-center"
                    >
                      Dalam Proses
                    </div>
                  <?php }else if ($data_k['status'] == "Selesai"){ ?>
                    <div
                      class="bg-blue-500 text-white font-bold py-2 px-3 flex rounded-sm w-auto justify-center"
                    >
                      Selesai
                    </div>
                  <?php } ?>
                  </td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </section>
    <script>
      window.onload = function () {
        window.print()
      }
    </script>
  </body>
</html>
