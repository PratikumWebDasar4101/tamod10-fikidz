<?php
session_start();
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<table align="center" width="70%">
	<form action="dashboard.php" method="POST">
		<tr>
			<th>Search</th>
		</tr>
		<tr align="center">
			<td><input type="text" name="search" placeholder="Nama"></td>
		</tr>
		<tr align="center">
			<td><input type="submit" name="kirim"></td>
		</tr>
	</form>
</table>
<hr>
<br>
<br>
<table border="1" align="center" width="70%">
	<tr>
		<th>Nim</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Email</th>
		<th>Kelas</th>
		<th>Hobi</th>
		<th>Genre Film</th>
		<th>Tempat Wisata</th>
		<th>Action</th>
	</tr>
	<?php 
		@$search = $_POST['search'];
		require_once ("koneksi.php");
		$result = $proses->view();
			
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['nim']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['tgl_lahir']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['kelas']?></td>
				<td><?php echo $row['hobi']?></td>
				<td><?php echo $row['genre']?></td>
				<td><?php echo $row['wisata']?></td>
				<td align="center"><a href="koneksi.php?delete=<?php echo $row['nim']; ?>"><input type="button" value="Hapus"></a> | <a href="edit.php?nim=<?php echo $row['nim']; ?>"> <input type="button" value="Edit"></a></td>
			</tr>
			<?php
			}
		} else{
			echo "0 results";
		}
 	?>
 	<tr>
                <td colspan="10" align="center"><a href="newData.php"><input type="button" value="Tambah Data"></a> | <a href="profile.php"><input type="button" value="Profile"></a> | <a href="dashboard.php"><input type="button" value="Semua Data"></a> | <a href="index.php"><input type="button" value="Logout"></a></td>
            </tr>
 </table>