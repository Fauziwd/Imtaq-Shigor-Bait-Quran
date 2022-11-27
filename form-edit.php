<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM ppsb WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Santri Baru | Baitul Qur'an</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Calon Santri</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="text" name="id" value="<?php echo $siswa['id']  ?>" />

            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" placeholder="tulis nama" />
        </p>
        <p>
            <label for="ttl">TTL: </label>
            <input type="text" name="ttl" value="<?php echo $siswa['ttl'] ?>" placeholder="tulis tempat tanggal lahir" />
        </p>
        <p>
            <label for="unit">Unit: </label>
            <input type="text" name="unit" value="<?php echo $siswa['unit'] ?>" placeholder="tulis 'Imtaq Shighor'" />
        </p>
        <p>
            <label for="jenis-kelamin">Jenis Kelamin: </label>
            <input type="text" name="jenis-kelamin" value="<?php echo $siswa['jenis-kelamin'] ?>" placeholder="tulis ikhwan/akhwat" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?>" placeholder="tulis alamat" />
        </p>
        <p>
            <label for="nomor-hp">Nomor HP: </label>
            <input type="text" name="nomor-hp" value="<?php echo $siswa['nomor-hp'] ?>" placeholder="tulis nomormu" />
        </p>


        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>