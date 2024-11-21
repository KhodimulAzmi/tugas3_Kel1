<!-- app/views/event/index.php -->
<h2>Daftar Events</h2>

<!-- Link untuk menambah event baru -->
<a href="/event/create">Tambah Events Baru</a>

<!-- Daftar acara -->
<ul>
    <?php foreach ($EventController as $event): ?>
        <li>
            <!-- Menampilkan Nama Acara, Deskripsi, Tanggal, Waktu, dan Lokasi -->
            <p><strong>ID Acara:</strong> <?= htmlspecialchars($event['id_events']); ?></p>
            <p><strong>Nama Acara:</strong> <?= htmlspecialchars($event['nama_acara']); ?></p>
            <p><strong>Deskripsi:</strong> <?= htmlspecialchars($event['deskripsi']); ?></p>
            <p><strong>Tanggal:</strong> <?= htmlspecialchars($event['tanggal']); ?></p>
            <p><strong>Waktu:</strong> <?= htmlspecialchars($event['waktu']); ?></p>
            <p><strong>Lokasi:</strong> <?= htmlspecialchars($event['lokasi']); ?></p>
            <p><strong>Penanggung Jawab:</strong> <?= htmlspecialchars($event['id_org']); ?></p>

            <!-- Tautan untuk Edit dan Delete -->
            <p>
                <a href="/event/edit/<?= htmlspecialchars($event['id_events']); ?>">Edit</a> |
                <a href="/event/delete/<?= htmlspecialchars($event['id_events']); ?>" onclick="return confirm('Are you sure you want to delete this event?')">Delete</a>
            </p>
        </li>
    <?php endforeach; ?>
</ul>
