<?php //Menandakan awal dari kode PHP
include 'koneksi.php'; //Memuat dan mengeksekusi file koneksi.php

$query = "SELECT * FROM pendaftaran"; //Variabel untuk menyimpan string query
$result = mysqli_query($conn, $query); //untuk menjalankan query ke database
?> <!--Menandakan akhir kode PHP-->

<!DOCTYPE html> <!--Menentukan versi HTML yang digunakan (HTML5)-->
<html lang="en"> <!--Elemen pembungkus seluruh konten halaman-->
<head>
  <meta charset="UTF-8">
  <title>Data Pendaftaran</title> <!--Judul halaman yang muncul di tab browser-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="tampil.css"> <!--menghubungkan style css dengan nama file tampil.css-->
</head>

<body> <!--Menandai awal bagian konten yang akan ditampilkan di browser-->
<div class="container mt-5"> <!--Membuat wadah dengan lebar responsif, Margin top 48px-->
  <h1 class="mb-4">Daftar Pemain Futsal</h1> <!--Heading 1 dengan margin bottom 24px-->
  <table class="table table-striped table-bordered"> <!--mengaplikasikan styling dasar tabel-->

  <thead>  <!-- Membuka bagian kepala tabel (header) -->
    <tr>  <!-- Membuat baris (table row) di dalam header -->
        <th>No</th>  <!-- Kolom header 1: Nomor urut -->
        <th>Nama Lengkap</th>  <!-- Kolom header 2: Untuk nama lengkap -->
        <th>Tempat Lahir</th>  <!-- Kolom header 3: Untuk kota/daerah kelahiran -->
        <th>Tanggal Lahir</th>  <!-- Kolom header 4: Untuk tanggal lahir (format: dd-mm-yyyy) -->
        <th>Alamat</th>  <!-- Kolom header 5: Untuk alamat tempat tinggal -->
        <th>No HP</th>  <!-- Kolom header 6: Untuk nomor telepon/handphone -->
        <th>Email</th>  <!-- Kolom header 7: Untuk alamat email -->
        <th>Usia</th>  <!-- Kolom header 8: Untuk menampilkan umur (dalam tahun) -->
    </tr>  <!-- Menutup baris header -->
  </thead>  <!-- Menutup bagian kepala tabel -->

    <tbody> <!-- Membuka bagian body tabel (tempat data ditampilkan) -->
      <?php
      $no = 1;
      while($data = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$data['nama_lengkap']}</td>
                <td>{$data['tempat_lahir']}</td>
                <td>{$data['tanggal_lahir']}</td>
                <td>{$data['alamat_lengkap']}</td>
                <td>{$data['no_hp']}</td>
                <td>{$data['email']}</td>
                <td>{$data['usia']}</td>
              </tr>";
        $no++;
      }
      ?>
    </tbody>
</table>  <!-- Menutup tag tabel (penutup untuk <table> yang dibuka sebelumnya) -->

<!-- Membuat tombol "Kembali Ke Pendaftaran" dengan link ke index.html -->
<a href="index.html">  <!-- Link yang mengarah ke halaman index.html -->
  <button class="btn btn-success mt-2">  <!-- Tombol dengan styling Bootstrap -->
    Kembali Ke Pendaftaran  <!-- Teks yang ditampilkan pada tombol -->
  </button>
</a>

</div>  <!-- Menutup tag div (penutup untuk <div> yang dibuka sebelumnya) -->
</body>  <!-- Menutup tag body dari dokumen HTML -->
</html>  <!-- Menutup tag html (penanda akhir dokumen HTML) -->
