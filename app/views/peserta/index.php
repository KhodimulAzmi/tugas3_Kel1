<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        .add-button {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .add-button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f8f9fa;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        .empty-data {
            text-align: center;
            color: #666;
            font-size: 18px;
        }
    </style>
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
