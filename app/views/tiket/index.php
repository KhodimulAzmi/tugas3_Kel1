<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket</title>

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
      <h1 class="mb-4">Daftar Tiket</h1>
    </div>
  </header>
  
  <!-- Main Content -->
  <main class="container my-5">
    <div class="text-end mb-3">
      <a href="/tiket/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Tiket</a>
    </div>
    <table class="table-custom">
      <thead>
        <tr>
          <th>Id Tiket</th>
          <th>Jenis Tiket</th>
          <th>Harga</th>
          <th>Kuota</th>
          <th>Id Events</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ticketData as $tiket): ?>
        <tr>
          <td><?php echo $tiket['id_tiket']; ?></td>
          <td><?php echo $tiket['jenis_tiket']; ?></td>
          <td><?php echo $tiket['harga']; ?></td>
          <td><?php echo $tiket['kuota']; ?></td>
          <td><?php echo $tiket['nama_acara']; ?></td>
          <td>
                        <a href="/tiket/edit/<?php echo $tiket['id_tiket']; ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                    </td>
                    <td>
                        <a href="/tiket/delete/<?php echo $tiket['id_tiket']; ?>" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
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
