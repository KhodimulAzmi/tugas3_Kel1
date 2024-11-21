<!-- app/views/user/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Organizers</title>
    <!-- Menambahkan CDN untuk Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Organizers</h2>
        
        <!-- Form untuk mengedit data organizer -->
        <form action="/organizers/update/<?php echo $organizers['id_org']; ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $organizers['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="text" id="kontak" name="kontak" class="form-control" value="<?php echo $organizers['kontak']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $organizers['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" value="<?php echo $organizers['jabatan']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <hr>
        <a href="/organizers/index" class="btn btn-secondary">Back to List</a>
    </div>

    <!-- Menambahkan CDN untuk Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>