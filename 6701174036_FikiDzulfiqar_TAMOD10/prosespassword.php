<?php
require_once("koneksi.php");

$db = new editpassword;

$username   = $_POST["username"];
$password   = $_POST["password"];

$sql = "UPDATE akun SET password='$password' WHERE username=$username";
if ($db->query($sql)) {
    header("Location: profile.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?> 