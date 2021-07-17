<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Kas Warga</title>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
			text-align: center;
		}
	</style>
</head>
<body>
	<a href="/kaswarga/index">Data Warga</a>
	<a href="/daftarkaswarga">Transaksi Iuran Warga</a>
	<a href="/laporantr">Laporan Transaksi</a>
	<h1>Data Kas Warga</h1>
	<a href="/daftarkaswarga/tambahkaswarga">Tambah Kas Warga</a>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>KAS</th>
				<th>Tgl Masuk</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$nomor = 0;
				foreach ($tampildata as $row) :
					$nomor++;
			?>
			<tr>
				<th><?= $nomor; ?></th>
				<td><?= $row->nik ?></td>
				<td><?= $row->nama ?></td>
				<td>Rp.<?= $row->kas ?></td>
				<td><?= $row->tglmasuk ?></td>
				<td><?= $row->keter ?></td>
			</tr>
			<?php
				endforeach;
			?>
		</tbody>
	</table>
</body>
</html>