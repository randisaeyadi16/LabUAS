<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Kas Warga</title>
</head>
<body>
	<h2>Tambah Kas Warga Warga</h2>
	<p>
		<a href="/daftarkaswarga">Kembali</a>
	</p>
	<p>
		<?= form_open('/daftarkaswarga/simpankaswarga') ?>
		<table>
			<tr>
				<td>NIK :</td>
				<td>
					<input type="num" name="nik" maxlength="7" placeholder="Masukan Nik">
				</td>
			</tr>
			<tr>
				<td>Nama Warga :</td>
				<td>
					<input type="text" name="nama" size="50" placeholder="Masukan Nama">
				</td>
			</tr>
			<tr>
				<td>Tambah Kas :</td>
				<td>
					<input type="num" name="kas" placeholder="Rp.">
				</td>
			</tr>
			<tr>
				<td>Tgl Masuk :</td>
				<td>
					<input type="date" name="tglmasuk">
				</td>
			</tr>
			<tr>
				<td>Keterangan :</td>
				<td>
					<input type="text" name="keter" placeholder="Masukan Keterangan">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Simpan">
				</td>
			</tr>
		</table>
		<?= form_close();?>
	</p>
</body>
</html>