<!-- app/views/user/create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tiket</title>
</head>
<body>
    <h1>Tambah Tiket</h1>
    <form action="/tugas3_Kel1/tiket/store" method="POST">
        <label for="id_tiket">ID Tiket :</label><br>
        <input type="number" id="id_tiket" name="id_tiket" required><br><br>

        <label for="jenis_tiket">Jenis Tiket :</label><br>
        <select id="jenis_tiket" name="jenis_tiket" required>
            <option value="VIP">VIP</option>
            <option value="REGULAR">REGULAR</option>
        </select><br><br>

        <label for="harga">Harga :</label><br>
        <input type="number" id="harga" name="harga" step="0.01" required><br><br>

        <label for="kuota">Kuota :</label><br>
        <input type="number" id="kuota" name="kuota" required><br><br>

        <label for="id_events">ID Events :</label><br>
        <input type="number" id="id_events" name="id_events" required><br><br>

        <button type="submit">Simpan Tiket</button>
    </form>
    <br>
    <a href="/tugas3_Kel1/tiket/index">Kembali ke Daftar Tiket</a>
</body>
</html>

