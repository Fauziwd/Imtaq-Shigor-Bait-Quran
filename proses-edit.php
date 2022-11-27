<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $unit = $_POST['unit'];
    $jk = $_POST['jenis-kelamin'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor-hp'];
    

    // buat query update
    $sql = "UPDATE `ppsb` SET `nama` = '$nama', `ttl` = '$ttl', `unit` = '$unit', `jenis-kelamin` = '$jk', `alamat` = '$alamat', `nomor-hp` = '$nomor_hp' WHERE `id`= $id ;";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('location:list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>