<!-- app/views/user/edit.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket</title>
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
    <div class="container my-5">
        <header class="text-center">
            <h1 class="mb-4">Edit Tiket</h1>
        </header>

        <main>
            <?php if (isset($tiket)): ?>
                <form action="/tiket/update/<?php echo $tiket['id_tiket']; ?>" method="POST" class="form-container">
                    <div class="form-group mb-3">
                        <label for="id_tiket" class="form-label">ID Tiket</label>
                        <input type="text" id="id_tiket" name="id_tiket" class="form-control" value="<?php echo $tiket['id_tiket']; ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jenis_tiket" class="form-label">Jenis Tiket</label>
                        <select id="jenis_tiket" name="jenis_tiket" class="form-select" required>
                            <option value="VIP" <?php echo $tiket['jenis_tiket'] == 'VIP' ? 'selected' : ''; ?>>VIP</option>
                            <option value="REGULAR" <?php echo $tiket['jenis_tiket'] == 'REGULAR' ? 'selected' : ''; ?>>REGULAR</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control" value="<?php echo $tiket['harga']; ?>" step="0.01" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="kuota" class="form-label">Kuota</label>
                        <input type="number" id="kuota" name="kuota" class="form-control" value="<?php echo $tiket['kuota']; ?>" required>
                    </div>

                    <div class="form-group mb-3">
                    <label for="id_events" class="form-label">Pilih Events</label>
                    <select name="id_events" class="form-control" required>
                        <option value="">Pilih Event</option>
                        <?php foreach ($event as $index => $ev): ?>
                            <option value="<?= htmlspecialchars($ev['id_events']); ?>" <?= ($ev['id_events'] == $tiket['id_events']) ? 'selected' : ''; ?>>
                                <?= htmlspecialchars($ev['nama_acara']); ?>
                            </option><br></br>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Update Tiket</button>
                    </div>

                </form>
            <?php else: ?>
                <div class="text-center">
                    <p class="text-danger">Tiket tidak ditemukan.</p>
                    <a href="/tiket/index" class="btn btn-secondary">Kembali ke Daftar Tiket</a>
                </div>
            <?php endif; ?>
        </main>

        <div class="text-center mt-4">
            <a href="/tiket/index" class="btn btn-secondary">Kembali ke Daftar Tiket</a>
        </div>
    </div>

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