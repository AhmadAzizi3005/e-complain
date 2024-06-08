<?php 
include('../koneksi/koneksi.php');
$id_komplain = $_GET['data'];

$sql = "SELECT * FROM `complain` WHERE `angka_random` = '$id_komplain'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
$nim = $data['nim'];

$sql_a = "SELECT * FROM `user` WHERE `nim` = '$nim'";
$query_a = mysqli_query($koneksi,$sql_a);
$data_a = mysqli_fetch_array($query_a);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Complaint</title>
    <link
    href="dist/output.css"
    ``
    rel="stylesheet"
  />
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="pt-24 pb-10 min-h-screen flex items-center justify-center bg-blue-950 relative ">
    <div class="container mx-auto mt-8 p-8 bg-white rounded-md shadow-md w-[1000px] h-full">
        <!-- Kop Surat -->
        <div class="container mx-auto flex">
         <!-- Left Column -->
            <div class="w-1/3 p-4 flex justify-center items-center">
                <img src="img/VokasiUB.png" alt="Middle Image" class="mx-auto" width="120">
            </div>

            <div class="w-3/3 p-5 text-center">
                <h1 class="text-lg font-bold">KEMENTERIAN PENDIDIKAN, </h1>
                <h1 class="text-lg font-bold">KEBUDAYAAN, RISET, DAN TEKNOLOGI</h1>
                <h1 class="text-lg font-bold">UNIVERSITAS BRAWIJAYA</h1>
                <h1 class="text-lg font-bold">FAKULTAS VOKASI</h1>
                <p>Jl. Veteran 12-16 Malang 65145 | Email: <a href="mailto:bemvokasibrawijaya@gmail.com" class="underline">bemvokasibrawijaya@gmail.com</a></p>   
            </div>

            <!-- Right Column for another Image -->
            <div class="w-1/3 p-4 flex justify-center items-center">
               
                <img src="img/logo.png" alt="Right Image" class="mx-auto"  width="80">
            </div>
        </div>
        <div class=" border-2 w-full mx-auto border-black"></div>


        <!-- Isi Surat -->
        <div >
            <div class=" text-center mt-2">
            <h3 class="text-base font-bold">SURAT LAPORAN HASIL PENGADUAN</h3>
            <h3 class="text-base font-bold">FAKULTAS VOKASI</h3>
            <h3 class="text-base font-bold">UNIVERSITAS BRAWIJAYA</h3>
            <h3 class="text-base font-bold">TAHUN 2023</h3>
            </div>
        </div>
        <div class="container mx-auto mt-8">
    <table class="min-w-full bg-white border border-gray-300">
        <tbody>
            <!-- Baris 1 -->
            <tr class="relative">
                <td class="border-b border-r border-gray-300 p-4 w-1/4">
                    <p class="text-base font-semibold">Identitas Pengguna Jasa E-Complaint</p>
                </td>
                <td class="border-b border-gray-300 p-4 flex">
                    <div class="w-1/2 flex">
                    <p class=" text-base font-semibold">Nama</p>
                    </div>
                    <div class="w-1/2 flex relative">
                    <p class="text-base font-semibold ml-1"><?php echo $data['nama'] ?></p>
                    <div class="absolute top-0 bottom-0 left-0 border-l border-black h-full"></div>
                    </div>

                </td>
                <td class="border-b border-gray-300 p-4 flex">
                    <div class="w-1/2 flex">
                    <p class="text-base font-semibold">No Identitas:</p>
                    </div>
                    <div class="w-1/2 flex relative">
                    <p class="text-base font-semibold ml-1"><?php echo $data['nim'] ?></p>
                    <div class="absolute top-0 bottom-0 left-0 border-l border-black h-full"></div>
                    </div>
                </td>
                <td class="border-b border-gray-300 p-4 flex">
                    <div class="w-1/2 flex">
                    <p class="text-base font-semibold">Departemen</p>
                    </div>
                    <div class="w-1/2 flex relative">
                    <p class="text-base font-semibold ml-1"><?php echo $data_a['departemen'] ?></p>
                    <div class="absolute top-0 bottom-0 left-0 border-l border-black h-full"></div>
                    </div>
                </td>
                <td class="border-b border-gray-300 p-4 flex">
                    <div class="w-1/2 flex">
                    <p class="text-base font-semibold">Email</p>
                    </div>
                    <div class="w-1/2 flex relative">
                    <p class="text-base font-semibold ml-1"><?php echo $data_a['email'] ?></p>
                    <div class="absolute top-0 bottom-0 left-0 border-l border-black h-full"></div>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="border-b border-r border-gray-300 p-4"><p class="text-base font-semibold">
                Tanggal Pengaduan
                </p></td>
                <td class="border-b border-gray-300 p-4">
                    <p class="text-base font-semibold"><?php echo $data['tanggal'] ?></p></td>
            </tr>

            
            <tr>
                <td class="border-b border-r border-gray-300 p-4">
                    <p class="text-base font-semibold">ID Komplain</p></td>
                <td class="border-b border-gray-300 p-4"><p class="text-base font-semibold">
                <?php echo $data['angka_random'] ?>
                </p></td>
            </tr>
            <tr>
                <td class="border-b border-r border-gray-300 p-4">
                    <p class="text-base font-semibold">Kategori</p></td>
                <td class="border-b border-gray-300 p-4"><p class="text-base font-semibold">
                <?php echo $data['jenis'] ?>
                </p></td>
            </tr>
            <tr>
                <td class="border-b border-r border-gray-300 p-4"><p class="text-base font-semibold">
                    Tujuan
                </p></td>
                <td class="border-b border-gray-300 p-4">
                    <p class="text-base font-semibold">
                    <?php echo $data['tujuan'] ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="border-b border-r border-gray-300 p-4"><p class="text-base font-semibold">
                    Pengaduan
                </p></td>
                <td class="border-b border-gray-300 p-4">
                    <p class="text-base font-semibold">
                    <?php echo $data['pengaduan'] ?>
                    </p>
                </td>
            </tr>
           
        </tbody>
    </table>
    <div>
        <h2 class="text-base font-bold mt-5">Rekap Percakapan :</h2>
        <table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="border border-gray-300 p-4 " rowspan="2">Waktu</th>
            <th class="border border-gray-300 p-4" colspan="2">Unit Pelaksana</th>
            <th class="border border-gray-300 p-4"rowspan="2">Keterangan</th>
            <th class="border border-gray-300 p-4" rowspan="2">Dokumen Pendukung</th>
        </tr>
        <tr>
            <th class="border border-gray-300 p-4 ">Dari</th>
            <th class="border border-gray-300 p-4">Untuk</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-300 p-4"><?php echo $data['tanggal'] ?></td>
            <td class="border border-gray-300 p-4"><?php echo $data_a['email'] ?></td>
            <td class="border border-gray-300 p-4"><?php echo $data['tujuan'] ?></td>
            <td class="border border-gray-300 p-4"><?php echo $data['pengaduan'] ?></td>
            <td class="border border-gray-300 p-4">
                <img src="../admin/public/assets/gambar/<?php echo $data['gambar'] ?>" alt="Tidak Ada Lampiran" width="250">
            </td>
        </tr>
    </tbody>
</table>
<table class="min-w-full bg-white border border-gray-300 mt-10">
        <tbody>
            <!-- Baris 1 -->
            <tr>
                <td class="border-b border-r border-gray-300 p-4">
                    <p class="text-base font-bold">Jawaban/Respon :</p>
                    <p class="text-base font-medium"><?php echo $data['deskripsi_penanganan'] ?></p>
                </td>
                <td class="border-b border-gray-300 p-4">  
                    <p class=" text-base font-bold mb-2">TTD Admin</p>
                    <img src="img/paraf.png" alt="ttdadmin" width="75">
                </td>
            </tr>
            
            <!-- Baris 2 -->
            <tr>
                <td class="border-b border-r border-gray-300 p-4"><p class="text-base font-semibold">
                Lampiran Admin
                </p></td>
                <td class="border-b border-gray-300 p-4">
                    <img src="../admin/public/assets/gambar/<?php echo $data['lampiran_admin'] ?>" alt="Tidak Ada Lampiran" width="250"></td>
            </tr>

            <tr>
                <td class="border-b border-r border-gray-300 p-4"><p class="text-base font-semibold">
                Tanggal Penyelesaian
                </p></td>
                <td class="border-b border-gray-300 p-4">
                    <p class="text-base font-semibold"><?php echo $data['tgl_proses'] ?></p></td>
            </tr>
           
        </tbody>
    </table>

    </div>
</div>


    </div>
</section>
<script>
      window.onload = function () {
        window.print();
      };
    </script>
</body>
</html>