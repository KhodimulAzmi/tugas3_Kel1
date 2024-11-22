<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="/public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/public/assets/css/main.css" rel="stylesheet">
    <link href="/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>

  <div class="text-center">
    <div class="container">
      <h1 class="mb-4">Edit Peserta</h1>
    </div>
</div>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="card shadow p-4">
      <form action="/peserta/update/<?php echo $attendee['id_att'] ?>" method="POST">
        <div class="form-group mb-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $attendee['nama'] ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="<?php echo $attendee['email'] ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="no_tlp">No. Telp</label>
          <input type="text" name="no_tlp" id="no_tlp" class="form-control" value="<?php echo $attendee['no_tlp'] ?>" required>
        </div>
        <div class="form-label">
        <label for="id_tiket">Pilih Tiket</label>
                <select name="id_tiket" class="form-control" required>
    <option value="<?php echo $attendee['id_tiket'] ?>">Pilih Tiket</option>
    <?php foreach ($tiket as $index => $tkt): ?>
        <option value="<?= htmlspecialchars($tkt['id_tiket']); ?>" <?= ($tkt['id_tiket'] == $tkt['id_tiket']) ? 'selected' : ''; ?>>
            <?= htmlspecialchars($tkt['id_tiket']); ?>
        </option><br></br>
    <?php endforeach; ?>
</select>
    </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-danger"><i class="bi bi-save"></i> Simpan</button>
          <a href="/peserta/index" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
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

</body>
</html>
