<?php //Menandakan awal dari kode PHP

//Konfigurasi Database
$servername = "localhost"; //Variabel untuk menyimpan lokasi server database
$username = "root"; //Nama pengguna untuk mengakses database
$password = "wenka123"; //Kata sandi untuk autentikasi user database
$database = "db_futsal"; //Nama database yang akan digunakan

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database); //untuk menghubungkan ke MySQL

?>
