<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login dengan PHP dan MySQL</title>
</head>
<body>
	<h1>Membuat Form PHP Login</h1>
	<h3>Login disini :</h3>
	<form action="koneksi.php" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td>HP</td>
				<td><input type="text" name="hp"></td>
			</tr>

			<tr>
				<td>Prodi</td>
				<td><select name="prodi">
					<option value="TI">Teknik Informatika</option>
					<option value="SI">Sistem Informasi</option>
					<option value="TK">Teknik Komputer</option>
					<option value="KA">Komputasi Akuntansi</option>
					<option value="MI">Manajemen Informasi</option>
				</select></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>