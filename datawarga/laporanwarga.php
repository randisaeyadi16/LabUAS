<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan Transaksi</title>
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
	<h3>Data Warga Belum Bayar Kas</h3>
    <a href="/laporantr/jumlahkas">Data Jumlah KAS</a>
    <tr>
    <br></br>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>Jumlah</th>
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
				<td><?= $row->tgl ?></td>
				<td><?= $row->keter ?></td>
				<td>Rp.<?= $row->jumlah ?></td>
			</tr>
			<?php
				endforeach;
			?>
		</tbody>
	</table>
</body>
</html>