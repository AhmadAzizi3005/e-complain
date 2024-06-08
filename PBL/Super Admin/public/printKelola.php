<?php include("../../koneksi/koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Complaint</title>
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    <link href="dist/output.css" `` rel="stylesheet" />
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
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
                  <th class="border border-gray-300 p-4">Tujuan</th>
                  <th class="border border-gray-300 p-4">Tanggal</th>
                  <th class="border border-gray-300 p-4">Status Komplain</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                if(!empty($_GET['status'])){
                  if($_GET['status'] == "Masuk"){
                  $sql = "SELECT * FROM `complain` WHERE `status` = 'Masuk' ORDER BY `tanggal` DESC";
                  $query = mysqli_query($koneksi,$sql);
                  }else if($_GET['status'] == "Proses"){
                  $sql = "SELECT * FROM `complain` WHERE `status` = 'Proses' ORDER BY `tanggal` DESC";
                  $query = mysqli_query($koneksi,$sql);
                  }else if($_GET['status'] == "Selesai"){
                    $sql = "SELECT * FROM `complain` WHERE `status` = 'Selesai' ORDER BY `tanggal` DESC";
                    $query = mysqli_query($koneksi,$sql);
                    }
                }else {
                  $sql = "SELECT * FROM `complain` ORDER BY `tanggal` DESC";
                  $query = mysqli_query($koneksi,$sql);
                }
                  $no = 1;
                  while($data = mysqli_fetch_array($query)){
                  $nama = $data['nama'];
                  $sql_p = "SELECT * FROM `user` WHERE `nama` = '$nama'";
                  $query_p = mysqli_query($koneksi,$sql_p);
                  $data_p = mysqli_fetch_array($query_p);
                  ?>
                <tr>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['angka_random']?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['nama']?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['nim']?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['pekerjaan']?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['tujuan']?></td>
                  <td class="border border-gray-300 p-4"><center><?php echo $data['tanggal']?></td>
                  <td class="border border-gray-300 p-4">
                  <?php if ($data['status'] == "Masuk"){ ?>
                    <div
                      class="bg-gray-500 text-white font-bold py-2 px-3 flex rounded-sm w-auto justify-center"
                    >
                      Masuk
                    </div>
                  <?php }else if ($data['status'] == "Proses"){ ?>
                    <div
                      class="bg-yellow-500 text-white font-bold py-2 px-3 flex rounded-sm w-auto justify-center"
                    >
                      Dalam Proses
                    </div>
                  <?php }else if ($data['status'] == "Selesai"){ ?>
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
