<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data Warga</title>
</head>
<body>
	<h2>Edit Data Warga</h2>
	<p>
		<a href="/kaswarga">Kembali</a>
	</p>
	<p>
		<?= form_open('/kaswarga/ubahdata') ?>
		<table>
			<tr>
				<td>NIK :</td>
				<td>
					<input type="text" name="nik" maxlength="7" value="<?= $nik=""; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Warga :</td>
				<td>
					<input type="text" name="nama" size="50">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="jk" value="L"> Laki - Laki
					<input type="radio" name="jk" value="P"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td>
					<textarea name="alamat" cols="50" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td>No Rumah :</td>
				<td>
					<input type="text" name="norumah" pattern="{0-9}+">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Update Data">
				</td>
			</tr>
		</table>
		<?= form_close();?>
	</p>
</body>
</html>