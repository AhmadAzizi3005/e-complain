<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("includes/head.php") ?>
  <?php 
session_start();
include('../koneksi/koneksi.php');
$id_user = $_SESSION['id_user'];
//get profil
$sql = " SELECT * FROM `user` WHERE `id_user`='$id_user'";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
	$nama = $data[1];
	$nim = $data[2];
  $email = $data[3];
  $status = $data[7];
}
?>

  </head>
  <body>
    <section class="pt-24 pb-10 min-h-screen flex items-center justify-center bg-blue-950">
      <div class="border-2 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center bg-white">
        <div class="px-16">
          <a
            href="komplain.php"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-xl max-w-[100px] text-center justify-center"
          >
            Kembali
          </a>
          <form id="complain" name="complain" action="proseskirimkomplain.php?action=kirim" method="post" class="flex flex-col gap-4 mr-10" enctype="multipart/form-data">
          
            <div>
              <label>Tanggal</label>
              <input id="tanggal" name="tanggal" class="p-2 rounded-xl border border-slate-500 w-full "  placeholder="tanggal" value="<?php echo $default_now; ?>">
            </div>
            <div>
              <label>Nama</label>
              <input id="nama" name="nama" class="p-2 rounded-xl border border-slate-500 w-full" readonly ="true" placeholder="Nama" value="<?php echo $nama; ?>">
            </div>
            <div>
              <label
                for="nim"
                class="mb-2 text-base text-blue-950"
                >NIM/NIK </label
              >
              <input id="nim" name="nim" class="p-2 rounded-xl border border-slate-500 w-full" readonly ="true"  placeholder="Nim" value="<?php echo $nim; ?>">
            </div>
            <div class="py-0">
              <label
                for="email"
                class="mb-2 text-base text-blue-950"
                >Email</label
              >
              <input
                class="p-2 rounded-xl border border-slate-500 w-full"
                id="email"
                type="email"
                name="email"
                placeholder="email"
                value="<?php echo $email; ?>"
      
              />
            </div>
            <input
                class="p-2 rounded-xl border border-slate-500 w-full"
                id="status"
                type="hidden"
                name="pekerjaan"
                placeholder="status"
                value="<?php echo $status; ?>"
      
              />
            <?php 
            if(!empty($_GET['kategori'])){
              if($_GET['kategori'] == 'pelayanan'){
                $jenis = "Pelayanan";
              }else if($_GET['kategori'] == 'keuangan'){
                $jenis = "Pembayaran & Keuangan";
              }else if($_GET['kategori'] == 'kurikulum'){
                $jenis = "Kurikulum & Pengajaran";
              }else if($_GET['kategori'] == 'fasilitas'){
                $jenis = "Fasilitas & Lingkungan";
              }else if($_GET['kategori'] == 'akademik'){
                $jenis = "Masalah Akademik";
              }
            ?>
            <div>
              <label>Jenis</label>
              <input id="jenis" name="jenis" class="p-2 rounded-xl border border-slate-500 w-full" readonly ="true" placeholder="Nama" value="<?php echo $jenis; ?>">
            </div> 
            <?php }else {?>
              <div> 
              <label>Jenis</label>
              <input id="jenis" name="jenis" class="p-2 rounded-xl border border-slate-500 w-full" placeholder="Masukkan Kategori" value="">
            </div> 
            <?php } ?>
  
            <div class="py-0 relative">
              <label
                for="Tujuan"
                class="mb-2 text-base text-blue-950"
                >Tujuan</label
              >
              <select
                id="tujuan"
                name="tujuan"
                class="p-2 rounded-xl border border-slate-500 w-full"
              >
                <option value="--">--</option>
                <option value="Departemen Bisnis dan Hospitality">Departemen Bisnis dan Hospitality</option>
                <option value="Departemen Industri Kreatif Dan Digital">Departemen Industri Kreatif Dan Digital</option>
              </select>
            </div>
        </div>
        <div class="w-1/2 mr-14">
            <div class="py-0">
              <label
                for="pengaduan"
                class="mb-2 text-base text-blue-950"
                >Pengaduan</label
              >
              <textarea
                id="pengaduan"
                name="pengaduan"
                class="p-2 rounded-xl border border-slate-500 w-full h-52"
              ></textarea>
            </div>
            <div x-data="{ showAttachment: false }">
              <label class="flex items-center gap-2">
                <input
                  type="checkbox"
                  name="remember"
                  class="rounded"
                  x-model="showAttachment"
                />
                <span class="text-sm ml-2 text-blue-950">Lampiran</span>
              </label>

              <div x-show="showAttachment">
              Select image to upload:
                    <input type="file" class="form-control" name="gambar" id="gambar">
              </div>
            </div>
            <div class="py-0 mt-5">
              <button id="submit_input" name="submit_input" button class="bg-orange-500 rounded-lg text-white py-2 hover:scale-105 duration-300 w-full" value="submit">Kirim</button>
            </a> 
          </div>
          </form>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"
      defer
    ></script>
    
  </body>
</html>
