<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $unit = $_POST['unit'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];

    // buat query
    $sql = "INSERT INTO `ppsb` (`id`, `nama`, `ttl`, `unit`, `jenis-kelamin`, `alamat`, `nomor-hp`) VALUES (NULL, '$nama', '$ttl', '$unit', '$jk', '$alamat', '$nomor_hp');";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>