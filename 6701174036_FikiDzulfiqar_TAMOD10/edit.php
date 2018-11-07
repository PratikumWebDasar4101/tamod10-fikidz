<?php 
session_start();
require_once ('koneksi.php');
    $nim     = $_GET['nim'];
    $sql = $proses -> select_data($nim);
    $row    = mysqli_fetch_assoc($sql);
    $daftar_hobi = explode(", ", $row['hobi']);
    $daftar_genre = explode(", ", $row['genre']);
    $daftar_wisata = explode(", ", $row['wisata']);
 ?>
 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    <form method="POST" action="koneksi.php?edit=<?php echo $row['nim']; ?>">
        <table align="center">
            <tr>
                <td colspan="2" align="center"><h2>Edit Data Diri</h2></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>" disabled></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td> 
                    <input type="checkbox" name="hobi[]" value="Touring" <?php if(array_search("Touring", $daftar_hobi) > -1 ) { echo "checked"; }?>>Touring<br>
                    <input type="checkbox" name="hobi[]" value="Riding" <?php if(array_search("Riding", $daftar_hobi) > -1 ) { echo "checked"; }?>>Riding<br>
                    <input type="checkbox" name="hobi[]" value="Hiking" <?php if(array_search("Hiking", $daftar_hobi) > -1 ) { echo "checked"; }?>>Hiking<br> 
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Genre Film</td>
                <td> 
                    <input type="checkbox" name="genre[]" value="Horror" <?php if(array_search("Horror", $daftar_genre) > -1 ) { echo "checked"; }?>> Horror<br>
                     <input type="checkbox" name="genre[]" value="Anime" <?php if(array_search("Anime", $daftar_genre) > -1 ) { echo "checked"; }?> > Anime<br>
                     <input type="checkbox" name="genre[]" value="Action" <?php if(array_search("Action", $daftar_genre) > -1 ) { echo "checked"; }?>> Action<br>
                     <input type="checkbox" name="genre[]" value="Drama" <?php if(array_search("Drama", $daftar_genre) > -1 ) { echo "checked"; }?>> Drama<br> 
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Tempat Wisata</td>
                <td> <input type="checkbox" name="wisata[]" value="Bali" <?php if(array_search("Bali", $daftar_wisata) > -1 ) { echo "checked"; }?>> Bali<br>
                     <input type="checkbox" name="wisata[]" value="Tanjung Selor" <?php if(array_search("Tanjung Selor", $daftar_wisata) > -1 ) { echo "checked"; }?>> Tanjung Selor<br>
                     <input type="checkbox" name="wisata[]" value="Jakarta" <?php if(array_search("Jakarta", $daftar_wisata) > -1 ) { echo "checked"; }?>> Jakarta<br> 
                     <input type="checkbox" name="wisata[]" value="Lombok" <?php if(array_search("Lombok", $daftar_wisata) > -1 ) { echo "checked"; }?>> Lombok<br> 
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>