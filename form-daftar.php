<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Santri Baru Baitul Qur'an | Baitul Qur'an</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Santri Baru Baitul Qur'an</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="tulis nama" />
        </p>
        <p>
            <label for="ttl">TTL: </label>
            <input type="text" name="ttl" placeholder="tulis tempat tanggal lahir" />
        </p>
        <p>
            <label for="unit">Unit: </label>
            <input type="text" name="unit" placeholder="tulis 'Imtaq Shighor'" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="text" name="jenis_kelamin" placeholder="tulis ikhwan/akhwat" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" placeholder="tulis alamat" />
        </p>
        <p>
            <label for="nomor_hp">Nomor HP: </label>
            <input type="text" name="nomor_hp" placeholder="tulis nomormu" />
        </p>
        
        <!--
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>

        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
       -->
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>