<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap   = $_POST['nama-lengkap'];
    $tempat_lahir   = $_POST['tempat'];
    $tanggal_lahir  = $_POST['tanggal'];
    $alamat_lengkap = $_POST['alamat-lengkap'];
    $no_hp          = $_POST['no-hp'];
    $email          = $_POST['email'];
    $usia           = $_POST['usia'];

    $sql = "INSERT INTO pendaftaran (nama_lengkap, tempat_lahir, tanggal_lahir, alamat_lengkap, no_hp, email, usia)
            VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat_lengkap', '$no_hp', '$email', $usia)";

    if ($conn->query($sql) === TRUE) {
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
                        <p>Kami akan menghubungi kamu melalui email: <?php echo $email; ?></p>
                        <a href="index.html"> <button type="submit" class="btn btn-primary">Kembali ke Beranda</button> </a>
                    </div>
                </body>
                </html>
        <?php

    } else {
        echo "Error saat menyimpan data: " . $conn->error;
    }

    $conn->close();
} else {
    header("Location: index.html");
    exit();
}
?>
