<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
</head>
<body>
    <div class="container">
        <h2>Edit Peserta</h2>
        <form action="/peserta/update/<?php echo $attendee['id_att'] ?>" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $attendee['nama']?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $attendee['email']?>" required>
            
            <label for="no_tlp">No. Telp:</label>
            <input type="text" id="no_tlp" name="no_tlp" value="<?php echo $attendee['no_tlp']?>" required>
            
            <label for="id_tiket">ID Tiket:</label>
            <input type="text" id="id_tiket" name="id_tiket" value="<?php echo $attendee['id_tiket']?>" required>
            
            <button type="submit">Simpan</button>
        </form>
        <a class="back-link" href="peserta/index">Kembali</a>
    </div>
</body>
</html>
