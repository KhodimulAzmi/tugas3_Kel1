<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>

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

 
  <div class="text-center">
    <div class="container">
      <h1 class="mb-4">Edit Event</h1>
    </div>
</div>

  <main class="container my-5">
    <div class="card shadow p-4">
      <form action="/event/update/<?php echo $event['id_events']; ?>" method="POST">
        <div class="form-group mb-3">
          <label for="nama_acara">Nama Acara</label>
          <input type="text" id="nama_acara" name="nama_acara" class="form-control" value="<?php echo htmlspecialchars($event['nama_acara'] ?? ''); ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control" required><?php echo htmlspecialchars($event['deskripsi'] ?? ''); ?></textarea>
        </div>
        <div class="form-group mb-3">
          <label for="tanggal">Tanggal</label>
          <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?php echo htmlspecialchars($event['tanggal'] ?? ''); ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="waktu">Waktu</label>
          <input type="time" id="waktu" name="waktu" class="form-control" value="<?php echo htmlspecialchars($event['waktu'] ?? ''); ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="lokasi">Lokasi</label>
          <input type="text" id="lokasi" name="lokasi" class="form-control" value="<?php echo htmlspecialchars($event['lokasi'] ?? ''); ?>" required>
        </div>
        <div class="form-group mb-3">
        <label for="id_org" class="form-label">Pilih Penanggung Jawab</label>
                <select name="id_org" class="form-control" required>
        <option value="">Pilih Organizers</option>
        <?php foreach ($org as $index => $or): ?>
        <option value="<?= htmlspecialchars($or['id_org']); ?>" <?= ($or['id_org'] == $event['id_org']) ? 'selected' : ''; ?>>
            <?= htmlspecialchars($or['nama']); ?>
        </option>
    <?php endforeach; ?>
</select>
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-danger"><i class="bi bi-save"></i> Update</button>
          <a href="/event/index" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back to List</a>
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
