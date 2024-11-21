<!-- app/views/user/index.php -->

<h2>Tiket</h2>
<a href="/tiket/create">Tambah Tiket</a>
    <table border= "1">
        <tr>
            <th>Id Tiket</th>
			<th>Jenis Tiket</th>
			<th>Harga</th>
			<th>Kuota</th>
			<th>Id Events</th>
			<th></th>
			<th></th>
        </tr>
            <?php
            foreach ($ticketData as $tiket){ ?>
		<tr>
				<td><?php echo $tiket['id_tiket']; ?></td>
				<td><?php echo $tiket['jenis_tiket']; ?></td>
				<td><?php echo $tiket['harga']; ?></td>
				<td><?php echo $tiket['kuota']; ?></td>
				<td><?php echo $tiket['id_events']; ?></td>
				<td><a href="/tiket/edit/<?php echo $tiket['id_tiket']; ?>">EDIT</a></td>
				<td><a href="/tiket/delete/<?php echo $tiket['id_tiket']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
    </table>
