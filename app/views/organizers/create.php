<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Organizers</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="/public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/public/assets/css/main.css" rel="stylesheet">
    <link href="/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header class="text-center">
    <div class="container">
      <h1 class="mb-4">Tambah Organizers</h1>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="card shadow p-4">
      <form action="/organizers/store" method="POST">
        <div class="form-group mb-3">
          <label for="name">Nama</label>
          <input type="text" name="nama" id="name" class="form-control" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group mb-3">
          <label for="kontak">Kontak</label>
          <input type="number" name="kontak" id="kontak" class="form-control" placeholder="Masukkan kontak" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
        </div>
        <div class="form-group mb-3">
          <label for="jabatan">Jabatan</label>
          <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan" required>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
          <a href="/organizers/index" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali ke Daftar</a>
        </div>
      </form>
    </div>
  </main>

<!-- Vendor JS Files -->
<script src="/public/assets/vendor/php-email-form/validate.js"></script>
  <script src="/public/assets/vendor/aos/aos.js"></script>
  <script src="/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public/assets/js/main.js"></script>
</html>
