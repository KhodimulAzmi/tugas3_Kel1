<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Organizers</title>
    <!-- Menambahkan link ke Google Fonts dan Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Organizers</h2>
        <!-- Form untuk menambah data organizer -->
        <form action="/organizers/store" method="POST">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="nama" id="name" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="number" name="kontak" id="kontak" class="form-control" placeholder="Masukkan kontak" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <hr>
        <a href="/organizers/index" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
    </div>

    <!-- Menambahkan CDN untuk Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>