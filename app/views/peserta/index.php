<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
</head>
<body>
    <div class="container">
        <h2>Daftar Peserta</h2>
        <!-- Link ke form tambah peserta -->
        <a class="add-button" href="/peserta/create">Tambah Peserta Baru</a>
        
        <?php 
        $no = 1; 
        // Cek apakah ada data peserta
        if (!empty($attendeesData)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>ID Tiket</th>
                        <th>Kelola</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($attendeesData as $attendee): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($attendee['nama']); ?></td>
                            <td><?php echo htmlspecialchars($attendee['email']); ?></td>
                            <td><?php echo htmlspecialchars($attendee['no_tlp']); ?></td>
                            <td><?php echo htmlspecialchars($attendee['id_tiket']); ?></td>
                            <td>
                                <a href="/peserta/edit/<?php echo $attendee['id_att']; ?>">Edit</a> | 
                                <a href="/peserta/delete/<?php echo $attendee['id_att']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="empty-data">Data peserta tidak ditemukan.</p>
        <?php } ?>
    </div>
</body>
</html>
