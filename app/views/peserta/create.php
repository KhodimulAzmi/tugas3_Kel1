
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta Baru</title>
</head>
<body>
    <div class="container">
        <h2>Tambah Peserta Baru</h2>
        <form action="/peserta/store" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="no_tlp">No. Telp:</label>
            <input type="text" id="no_tlp" name="no_tlp" required>

            <label for="id_tiket">ID Tiket:</label>
            <input type="text" id="id_tiket" name="id_tiket" required>

            <button type="submit">Simpan</button>
        </form>
        <div class="back-link">
            <a href="index">Kembali ke Daftar Peserta</a>
        </div>
    </div>
</body>
</html>
