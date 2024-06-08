<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("includes/head.php") ?>
  </head>
  <body>
    <!-- navbar -->
    <header>
     <?php include("includes/header.php") ?>
    </header>
    <!-- navbar end -->

    <!-- hero -->
    <section
      id="kategori"
      class="pt-32 bg-blue-950"
    >
      <div class="grid gap-5 justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 p-5">
        <!-- ...  ... -->
        <a
          href="form_komplain.php?kategori=pelayanan"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/support_agent_FILL0_wght400_GRAD0_opsz24.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-white font-bold text-2xl">Pelayanan</h4>
              <p class="text-base text-white text-justify">Keluhan tentang pelayanan dari institusi vokasi, seperti ketidaksesuaian jadwal, sikap petugas, atau fasilitas yang tidak memadai.</p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
        <!-- ...  ... -->
        <a
          href="form_komplain.php?kategori=keuangan"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 bg-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/payments_FILL0_wght400_GRAD0_opsz24.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-2xl font-bold text-blue-950">Pembayaran & Keuangan</h4>
              <p class="text-base text-blue-950 text-justify">Masalah terkait dengan pembayaran uang kuliah, beasiswa, atau masalah keuangan lainnya. <br /><br /></p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
        <!-- ...  ... -->
        <a
          href="form_komplain.php?kategori=kurikulum"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/kurikulum.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-2xl font-bold text-white">Kurikulum & Pengajaran</h4>
              <p class="text-base text-white text-">Keluhan mengenai kurikulum, metode pengajaran, atau kualitas pendidikan di vokasi. <br /><br /><br /></p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
        <!-- ...  ... -->
        <a
          href="form_komplain.php?kategori=fasilitas"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 bg-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/fasilitas.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-blue-950 font-bold text-2xl">Fasilitas & Lingkungan</h4>
              <p class="text-base text-blue-950 text-justify">Fasilitas & Lingkungan Komplain tentang kondisi fasilitas, kebersihan lingkungan, atau fasilitas yang rusak.</p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
        <!-- ...  ... -->
        <a
          href="form_komplain.php?kategori=akademik"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 border-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/akademik.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-2xl font-bold text-white">Masalah Akademik</h4>
              <p class="text-base text-white text-justify">Keluhan tentang penilaian, penugasan, atau hasil ujian. <br /><br /></p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
        <!-- ...  ... -->
        <a
          href="form_komplain.php"
          class="mb-10"
        >
          <div class="p-6 rounded-lg border-2 bg-white flex flex-col gap-6 w-full h-[295px] justify-center">
            <img
              src="img/komplain/keputusan.png"
              alt=""
              width="64"
            />
            <article class="flex flex-col gap-3">
              <h4 class="text-2xl font-bold text-blue-950">Lain-Lainnya</h4>
              <p class="text-base text-blue-950 text-">Keluhan yang tidak termasuk dari 5 kategori lainnya. <br /><br /><br /></p>
            </article>
          </div>
        </a>
        <!-- ...  ... -->
      </div>
    </section>
    <!-- hero end -->

    <!-- footer -->
    <?php include("includes/footer.php") ?>
    <!-- footer end -->

    <?php include("includes/script.php") ?>
  </body>
</html>
