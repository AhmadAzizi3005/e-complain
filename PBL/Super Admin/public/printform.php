<?php 
include('../../koneksi/koneksi.php');

$id_komplain = $_GET['data'];
$sql = "SELECT * FROM `complain` WHERE `angka_random` = '$id_komplain'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
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
                  <th class="border border-gray-300 p-4 text-2xl font-bold" colspan="2">Identitas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td class="border border-gray-300 p-4 font-semibold">ID Komplain</td>
                  <td class="border border-gray-300 p-4"><?php echo $data['angka_random']?></td>
                  </td>
                  </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-4 font-semibold">Nama</td>
                  <td class="border border-gray-300 p-4"><?php echo $data['nama']?></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-4 font-semibold">NIM</td>
                    <td class="border border-gray-300 p-4"><?php echo $data['nim']?></td>
                    </td>
                </tr>
              </tbody>
            </table>
            <div>
                <table class="border-collapse w-full">
                    <thead>
                      <tr>
                        <th class="border border-gray-300 p-4 text-2xl font-bold" colspan="2">Pengaduan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Tanggal</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['tanggal']?></td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Tujuan</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['tujuan']?></td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Kategori</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['jenis']?></td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Status</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['status']?></td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Lampiran</td>
                        <td class="border border-gray-300 p-4">
                            <img src="../../admin/public/assets/gambar/<?php echo $data['gambar'] ?>" alt="" width="200">
                        </td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Pengaduan</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['pengaduan']?></td>
                      </tr>
    
                    </tbody>
                  </table>
            </div>
            <div>
                <table class="border-collapse w-full">
                    <thead>
                      <tr>
                        <th class="border border-gray-300 p-4 text-2xl font-bold" colspan="2">Tanggapan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Tanggal</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['tgl_proses']?></td>
                        
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Tanggapan</td>
                        <td class="border border-gray-300 p-4"><?php echo $data['deskripsi_penanganan']?></td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-4 font-semibold">Lampiran</td>
                        <td class="border border-gray-300 p-4">
                            <img src="../../admin/public/assets/gambar/<?php echo $data['lampiran_admin']?>" alt="" width="200">
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
           
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
