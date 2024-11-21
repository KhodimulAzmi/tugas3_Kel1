<!-- app/views/organizers/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Organizers</title>
    <!-- Menambahkan CDN untuk Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Organizers</h2>
        <a href="/organizers/create" class="btn btn-success mb-3">Tambah Organizers</a>
        
        <!-- Tabel dengan Bootstrap -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID Organizers</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($organizer as $organizers) { ?>
                <tr>
                    <td><?php echo $organizers['id_org']; ?></td>
                    <td><?php echo $organizers['nama']; ?></td>
                    <td><?php echo $organizers['kontak']; ?></td>
                    <td><?php echo $organizers['email']; ?></td>
                    <td><?php echo $organizers['jabatan']; ?></td>
                    <td>
                        <a href="/organizers/edit/<?php echo $organizers['id_org']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/organizers/delete/<?php echo $organizers['id_org']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Menambahkan CDN untuk Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>