<!DOCTYPE html>
<html>
<head>
    <title>Peserta Pendaftaran Santri Baru | Baitul Qur'an</title>
</head>

<body>
    <header>
        <h3>Ahlan Wa Sahlan!</h3>
        <h1>Peserta Pendaftaran Santri Baru Baitul Qur'an</h1>
    </header>

    <h4>Menu</h4>
    <nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran calon huffadz berhasil ditambahkan!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

        <ul>
            <li><a href="form-daftar.php">Daftar Sekarang</a></li>
            <li><a href="list-siswa.php">Daftar Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>