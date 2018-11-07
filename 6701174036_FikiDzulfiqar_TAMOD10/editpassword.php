<?php
   session_start();
   $username = $_GET['username'];
?>

<title>Ubah Password</title>
<thead>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</thead>
<div align='center'>
  <form action="prosespassword.php" method="post">
    <table>
      <tbody>
        <tr>
          <td colspan="2" align="center">
            <h1>Ubah Password</h1>
          </td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" value="<?php echo $row['username'] ?>" disabled></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="password" type="password">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="right">
            <input value="Ubah" type="submit">
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>