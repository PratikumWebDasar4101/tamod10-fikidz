<?php 
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<br>
<a href="dashboard.php">Home</a>
<br>
<br>
 <table border="1" width="40%" style="text-align: center;" align="center">
 	<tr>
 		<td colspan="3" align="center"><h2>Profile</h2></td>
 	</tr>
 	<tr>
 		<th>Username</th>
 		<th>Password</th>
 		<th>Keterangan</th>
 	</tr>

 	<?php
		require_once ("koneksi.php");
		$result = $proses->viewprofile();
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>
 				<tr>
	 				<td><?php echo $row['username']?></td>
	 				<td><?php echo $row['password']?></td>
 					<td colspan="2"><a href="editpassword.php?username=<?php echo $row['username']; ?>"> <input type="button" value="Edit Password"></a></td>
 				</tr>
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}
 		
 	?>
 </table>