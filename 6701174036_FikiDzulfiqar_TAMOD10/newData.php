<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
</head>
<body>
	<form action="koneksi.php?tambah=input" method="POST">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h2>Data Diri</h2></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td> <input type="checkbox" name="hobi[]" value="Touring">Touring<br>
 					 <input type="checkbox" name="hobi[]" value="Riding">Riding<br>
 					 <input type="checkbox" name="hobi[]" value="Hiking">Hiking<br> 
 				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td> <input type="checkbox" name="genre[]" value="Horror">Horror<br>
 					 <input type="checkbox" name="genre[]" value="Anime">Anime<br>
 					 <input type="checkbox" name="genre[]" value="Action">Action<br>
 					 <input type="checkbox" name="genre[]" value="Drama">Drama<br> 
 				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td> <input type="checkbox" name="wisata[]" value="Bali">Bali<br>
 					 <input type="checkbox" name="wisata[]" value="Tanjung Selor">Tanjung Selor<br>
 					 <input type="checkbox" name="wisata[]" value="Jakarta">Jakarta<br>
 					 <input type="checkbox" name="wisata[]" value="Lombok">Lombok<br> 
 				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Daftar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
?>