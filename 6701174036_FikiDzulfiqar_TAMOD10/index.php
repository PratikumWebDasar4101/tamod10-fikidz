<?php
session_start();
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<form method="post" action="koneksi.php?login=login">
	<table align="center">
		<tr>
			<td colspan="2" align="center"><h2>Halaman Login</h2></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" minlength="5"></td>
		</tr>
		<tr>
			<td colspan=""><input type="submit" name="kirim" value="LOGIN"> | <a href="register.php"><input type="button" name="daftar" value="DAFTAR"></a></td>
		</tr>
    </table> 
</form>
<?php
?>