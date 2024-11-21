<!-- app/views/event/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
    <style>
        /* Styling untuk form */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Edit Event</h2>

    <!-- Form untuk edit event -->
    <form action="/event/update/<?php echo $event['id_events']; ?>" method="POST">


        <!-- Nama Acara -->
        <div>
            <label for="nama_acara">Nama Acara:</label>
            <input type="text" id="nama_acara" name="nama_acara" value="<?php echo htmlspecialchars($event['nama_acara'] ?? ''); ?>" required>
        </div>

        <!-- Deskripsi -->
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required><?php echo htmlspecialchars($event['deskripsi'] ?? ''); ?></textarea>
        </div>

        <!-- Tanggal -->
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo htmlspecialchars($event['tanggal'] ?? ''); ?>" required>
        </div>

        <!-- Waktu -->
        <div>
            <label for="waktu">Waktu:</label>
            <input type="time" id="waktu" name="waktu" value="<?php echo htmlspecialchars($event['waktu'] ?? ''); ?>" required>
        </div>

        <!-- Lokasi -->
        <div>
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="<?php echo htmlspecialchars($event['lokasi'] ?? ''); ?>" required>
        </div>

                <!-- Penanggung Jawab -->
                <div>
            <label for="penanggung jawab">Penanggung Jawab:</label>
            <input type="number" id="id_org" name="id_org" value="<?php echo htmlspecialchars($event['id_org'] ?? ''); ?>" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit">Update</button>
    </form>

    <!-- Link untuk kembali ke daftar acara -->
    <a href="/event/index">Back to List</a>

</body>
</html>
