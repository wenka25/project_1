<?php //Tag pembuka untuk memulai kode PHP
include 'koneksi.php'; //File ini berisi informasi koneksi ke database MySQL

if ($_SERVER["REQUEST_METHOD"] == "POST") { //Memeriksa apakah form dikirim menggunakan method POST
    //Setiap variabel menyimpan nilai dari input form:
    $nama_lengkap   = $_POST['nama-lengkap'];
    $tempat_lahir   = $_POST['tempat'];
    $tanggal_lahir  = $_POST['tanggal'];
    $alamat_lengkap = $_POST['alamat-lengkap'];
    $no_hp          = $_POST['no-hp'];
    $email          = $_POST['email'];
    $usia           = $_POST['usia'];
                                    //Daftar kolom di tabel yang akan diisi:
    $sql = "INSERT INTO pendaftaran (nama_lengkap, tempat_lahir, tanggal_lahir, alamat_lengkap, no_hp, email, usia)
            VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat_lengkap', '$no_hp', '$email', $usia)"; //Nilai yang akan dimasukkan ke masing-masing kolom, diambil dari variabel PHP:

    if ($conn->query($sql) === TRUE) { //Menjalankan perintah SQL yang disimpan di variabel $sql
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                rel="stylesheet"
            />
            <link rel="stylesheet" href="pendaftaran.css" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            </head>

                <body>
                    <div class="container">
                        <h2>Terima kasih sudah mendaftar, <?php echo $nama_lengkap; ?>!</h2>
                        <p>Kami akan menghubungi kamu melalui email Berikut: <?php echo $email; ?></p>
                        <a href="index.html"> <button class="btn btn-primary">Kembali ke Beranda</button> </a>
                    </div>
                </body>
                </html>
    <?php

    } else {
        echo "Error saat menyimpan data: " . $conn->error; //Berisi pesan error spesifik dari database
    }

    $conn->close(); //untuk menutup koneksi secara manual
} else {
    header("Location: index.html"); //Mengarahkan ke file index.html
    exit(); //untuk menghentikan eksekusi PHP
}
?> 
