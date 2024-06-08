<?php
include('../../koneksi/koneksi.php');

$tahun_sekarang = date('Y');

// Query SQL untuk menghitung jumlah komplain berdasarkan bulan, tahun, dan tujuan

$sql_a = "SELECT 
            YEAR(tanggal) AS tahun,
            MONTH(tanggal) AS bulan,
            COUNT(*) AS jumlah
        FROM 
            complain
        Where
            tujuan = 'Departemen Bisnis dan Hospitality'
        GROUP BY 
            YEAR(tanggal), MONTH(tanggal)";
// Eksekusi query
$query_a = mysqli_query($koneksi,$sql_a);

// Siapkan struktur data untuk Chart.js
$labels = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$datasets_a = [];

// Inisialisasi dataset
for ($i = 0; $i < 12; $i++) {
    $datasets_a[$i] = 0;
}

// Mengisi dataset dengan hasil query
while ($data_a = mysqli_fetch_assoc($query_a)) {
    $bulanIndex = $data_a['bulan'] - 1; // Index dimulai dari 0
    $datasets_a[$bulanIndex] = $data_a['jumlah'];
}

$sql_a = "SELECT 
            YEAR(tanggal) AS tahun,
            MONTH(tanggal) AS bulan,
            COUNT(*) AS jumlah
        FROM 
            complain
        Where
            tujuan = 'Departemen Industri Kreatif Dan Digital'
        GROUP BY 
            YEAR(tanggal), MONTH(tanggal)";
// Eksekusi query
$query_a = mysqli_query($koneksi,$sql_a);

// Siapkan struktur data untuk Chart.js
$labels = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$datasets_b = [];

// Inisialisasi dataset
for ($i = 0; $i < 12; $i++) {
    $datasets_b[$i] = 0;
}

// Mengisi dataset dengan hasil query
while ($data_a = mysqli_fetch_assoc($query_a)) {
    $bulanIndex = $data_a['bulan'] - 1; // Index dimulai dari 0
    $datasets_b[$bulanIndex] = $data_a['jumlah'];
}

//  konfigurasi Chart Line Js
$lineConfig = [
    'type' => 'line',
    'data' => [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => "Jumlah Komplain - Departemen Bisnis dan Hospitality ",
                'backgroundColor' => '#0694a2',
                'borderColor' => '#0694a2',
                'data' => $datasets_a,
                'fill' => false,
            ],
            [
              'label' => "Jumlah Komplain - Departemen Industri Kreatif dan Digital ",
                'backgroundColor' => '#FF69B4',
                'borderColor' => '#FF69B4',
                'data' => $datasets_b,
                'fill' => false,
            ],
        ],
    ],
    'options' => [
      'responsive' => true,
      'tension' => 0.4,
      /**
       * Default legends are ugly and impossible to style.
       * See examples in charts.html to add your own legends
       *  */
      'legend' => [
       'display' => false,
        ],
      'tooltips'=> [
        'mode'=> 'index',
        'intersect'=> false,
        ],
      'hover'=> [
        'mode'=> 'nearest',
        'intersect'=> true,
        ],
      'scales'=> [
        'x'=> [
          'display'=> true,
          'scaleLabel'=> [
            'display'=> true,
            'labelString'=> "Month",
          ],
        ],
        'y'=> [
          'display'=> true,
          'scaleLabel'=> [
            'display'=> true,
            'labelString'=> 'Value',
            ],
          ],
        ],
        // Konfigurasi lainnya sesuai kebutuhan Anda
      ],
];


// Konversi konfigurasi Chart.js ke JSON
$lineConfigJSON = json_encode($lineConfig);

  $get1 = mysqli_query($koneksi,"SELECT * FROM `complain` WHERE `pekerjaan` = 'Mahasiswa' ");
  $data1 = mysqli_num_rows($get1);
  $get2 = mysqli_query($koneksi,"SELECT * FROM `complain` WHERE `pekerjaan` = 'Dosen' ");
  $data2 = mysqli_num_rows($get2);
  $get3 = mysqli_query($koneksi,"SELECT * FROM `complain` WHERE `pekerjaan` = 'Staff' ");
  $data3 = mysqli_num_rows($get3);

?>