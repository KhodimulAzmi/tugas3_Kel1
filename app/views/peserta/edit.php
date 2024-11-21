<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            font-size: 14px;
            color: #4CAF50;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Peserta</h2>
        <form action="/peserta/update/<?php echo $attendee['id_att'] ?>" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $attendee['nama']?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $attendee['email']?>" required>
            
            <label for="no_tlp">No. Telp:</label>
            <input type="text" id="no_tlp" name="no_tlp" value="<?php echo $attendee['no_tlp']?>" required>
            
            <label for="id_tiket">ID Tiket:</label>
            <input type="text" id="id_tiket" name="id_tiket" value="<?php echo $attendee['id_tiket']?>" required>
            
            <button type="submit">Simpan</button>
        </form>
        <a class="back-link" href="peserta/index">Kembali</a>
    </div>
</body>
</html>
