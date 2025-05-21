<?php
include 'koneksi.php';

$query = "SELECT * FROM pendaftaran";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Pendaftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="tampil.css">
</head>

<body>
<div class="container mt-5">
  <h1 class="mb-4">Daftar Pemain Futsal</h1>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Usia</th>
      </tr>
    </thead>

    <tbody>
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
  </table>
  <a href="index.html"> <button class="btn btn-success mt-2">Kembali Ke Pendaftaran</button> </a>
</div>
</body>
</html>
