<!-- app/views/user/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket</title>
</head>
<body>
    <h2>Edit Tiket</h2>

    <?php if (isset($id_tiket)): ?>
    <form action="/tugas3_Kel1/tiket/update/<?php echo $tiket['id_tiket']; ?>" method="POST">
        <table>
            <tr>
                <td><label for="id_tiket">ID Tiket:</label></td>
                <td><input type="text" name="id_tiket" value="<?php echo $tiket['id_tiket']; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="jenis_tiket">Jenis Tiket:</label></td>
                <td>
                    <select name="jenis_tiket">
                        <option value="VIP" <?php echo $tiket['jenis_tiket'] == 'VIP' ? 'selected' : ''; ?>>VIP</option>
                        <option value="REGULAR" <?php echo $tiket['jenis_tiket'] == 'REGULAR' ? 'selected' : ''; ?>>REGULAR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga:</label></td>
                <td><input type="number" name="harga" value="<?php echo $tiket['harga']; ?>" step="0.01" required></td>
            </tr>
            <tr>
                <td><label for="kuota">Kuota:</label></td>
                <td><input type="number" name="kuota" value="<?php echo $tiket['kuota']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="id_events">ID Events:</label></td>
                <td><input type="number" name="id_events" value="<?php echo $tiket['id_events']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Update Tiket">
                </td>
            </tr>
        </table>
    </form>
    <?php else: ?>
        <p>Tiket tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
