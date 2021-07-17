<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Warga</title>
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
	<a href="/daftarkaswarga/index">Transaksi Iuran Warga</a>
	<a href="/laporantr/index">Laporan Transaksi</a>
	<h1>Data Warga</h1>
	<a href="/kaswarga/tambahwarga">Tambah Data Warga</a>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Rumah</th>
				<th>Aksi</th>
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
				<td><?= $row->kelamin ?></td>
				<td><?= $row->alamat ?></td>
				<td><?= $row->no_rumah ?></td>
				<td>
					<button type="button" onclick="hapus('<?= $row->nik ?>')">
						Hapus
					</button>

					<button type="button" onclick="window.location='<?php echo site_url('kaswarga/editdatawarga/' . $row->nik) ?>'">
						Edit
					</button>
				</td>
			</tr>
			<?php
				endforeach;
			?>
		</tbody>
	</table>
	<script>
		function hapus(nik) {
			pesan = confirm('Yakin Hapus Data Warga ?');
		
		if (pesan) {
			window.location.href = ("<?= site_url('/kaswarga/hapus/') ?>") + nik;
		} else return false;
	}
	</script>
</body>
</html>