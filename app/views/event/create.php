<!-- app/views/event/create.php -->
<!-- app/views/event/create.php -->
<h2>Tambah Acara Baru</h2>
<form action="/event/store" method="POST" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
    <div style="margin-bottom: 15px;">
        <label for="nama_acara" style="display: block; font-weight: bold;">Nama Acara:</label>
        <input type="text" name="nama_acara" id="nama_acara" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="deskripsi" style="display: block; font-weight: bold;">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="tanggal" style="display: block; font-weight: bold;">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="waktu" style="display: block; font-weight: bold;">Waktu:</label>
        <input type="time" name="waktu" id="waktu" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="lokasi" style="display: block; font-weight: bold;">Lokasi:</label>
        <input type="text" name="lokasi" id="lokasi" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="id_org" style="display: block; font-weight: bold;">ID Organizer:</label>
        <input type="int" name="id_org" id="id_org" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <button type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px;">Simpan</button>
</form>
