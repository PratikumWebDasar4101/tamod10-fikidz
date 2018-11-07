<?php 
class proses{
	
	private $conn;
	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "mod10";
		$this->conn = new mysqli($servername, $username, $password, $db);
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		} 
	}
	public function view(){
		$sql ="SELECT * FROM mahasiswa";
		return mysqli_query($this->conn, $sql);
	}
	public function viewprofile(){
		$sql = "SELECT * FROM akun";
		return mysqli_query($this->conn, $sql);
	}
//=========================================================================
	public function tambah(){
		if (isset($_POST['nim'])) {
		    $nama       = $_POST['nama'];
		    $nim        = $_POST['nim'];
		    $tgl_lahir	= $_POST['tgl_lahir'];
		    $email  	= $_POST['email'];
		    $kelas		= $_POST['kelas'];
		    $hobi		= $_POST['hobi'];
		    $list_hobi 	= implode(", ", $hobi);
		    $genre		= $_POST['genre'];
		    $list_genre = implode(", ", $genre);
		    $wisata		= $_POST['wisata'];
		    $list_wisata = implode(", ", $wisata);
		    $sql = "INSERT INTO mahasiswa (nim, nama,tgl_lahir, email, kelas, hobi, genre, wisata) 
		            VALUES ('$nim', '$nama','$tgl_lahir', '$email', '$kelas', '$list_hobi', '$list_genre', '$list_wisata')";
		    if (mysqli_query($this->conn, $sql)) {
		        echo "	<script>
	         				alert('BERHASIL DITAMBAH!');
	         				location='dashboard.php';
	         			</script>";
		    }else {
		        echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		    }
		    mysqli_close($this->conn);
		}
	}
//==========================================================================
	public function delete($nim){
    	$delete = "DELETE FROM mahasiswa WHERE nim='$nim'";
    	if (mysqli_query($this->conn, $delete)) {
        echo "<script> 
                alert('BERHASIL DIHAPUS'); 
                location='dashboard.php';
             </script>";
    	}else {
        	echo "Error: " . $delete . "<br?" . mysqli_error($this->conn);
    	}
    	mysqli_close($this->conn);
	}
//===========================================================================
	public function select_data($nim){
	    $edit   = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
	    return mysqli_query($this->conn,$edit); 
	}
//===========================================================================
	public function edit(){
        $nim            = $_POST['nim'];
		$nama           = $_POST['nama'];
		$tgl_lahir      = $_POST['tgl_lahir'];
		$email          = $_POST['email'];
		$kelas          = $_POST['kelas'];
		$hobi           = $_POST['hobi'];
        $list_hobi      = implode(", ", $hobi);
		$genre          = $_POST['genre'];
        $list_genre     = implode(", ", $genre);
        $wisata         = $_POST['wisata'];
        $list_wisata    = implode(", ", $wisata);
        $sql = "UPDATE mahasiswa SET nama='$nama', tgl_lahir='$tgl_lahir', email='$email',kelas='$kelas', hobi='$list_hobi', genre='$list_genre',wisata = '$list_wisata' WHERE nim='$nim'";
        if (mysqli_query($this->conn, $sql)) {
                echo "<script> 
                        alert('BERHASIL DIUBAH!'); 
                        location='dashboard.php';
                     </script>";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    
        mysqli_close($this->conn);
	}
//===========================================================================
	public function editpassword(){
        $username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "UPDATE akun SET username='$username', password='$password' WHERE username='$username'";
        if (mysqli_query($this->conn, $sql)) {
                echo "<script> 
                        alert('PASSWORD BERHASIL DIUBAH!'); 
                        location='profile.php';
                     </script>";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    
        mysqli_close($this->conn);
	}
//========================================================================	
	public function register(){
	 	$username = $_POST['username'];
	 	$password = $_POST['password'];
	 	if ($_POST['retype']==$_POST['password'] ) {
	 	
		     $sql = "INSERT INTO akun (username, password) 
			            VALUES ('$username', '$password')";
			    if (mysqli_query($this->conn, $sql)) {
			        echo "	<script>
		         				alert('BERHASIL DITAMBAH!');
		         				location='index.php';
		         			</script>";
			    }else {
			        echo "Error: " . $sql . "<br?" . mysqli_error($this->conn);
			    }
		}else{
			echo "<script>alert('PASSWORD SALAH!');history.go(-1)</script>";
		}
		    mysqli_close($this->conn);
	}
//===========================================================================
	public function login(){
	if (isset($_POST['kirim'])) {
			
			$username   = $_POST['username'];
	        $password   = $_POST['password'];
	    if (isset($_SESSION['sukses'])) {
	        header("Location: dashboard.php");
	    }
	    if (isset($_GET['logout'])) {
	        session_destroy();
	        header("Location: index.php");
	    }
	        $sql = "SELECT * FROM akun 
	                WHERE username = '$username' AND password = '$password'";
	        $result = mysqli_query($this->conn,$sql);
	        $row = mysqli_fetch_assoc($result);
	        if (mysqli_num_rows($result) == 0 ) {
	            ?>
	                <script>
	                    alert("USERNAME PASSWORD SALAH!");
	                    location='index.php';
	                </script>
	            <?php
	        }else {
	            $_SESSION['sukses'] = "Berhasil";
	            ?>
	                <script>
	                    alert("LOGIN BERHASIL!");
	                    location = "dashboard.php";
	                </script>
	            <?php
	        }
		}
	}
}
//===========================================================================
$proses = new proses();
if (isset($_GET['tambah'])) {
	$proses -> tambah();
}
if (isset($_GET['delete'])) {
	$proses -> delete($_GET['delete']);
}
if (isset($_GET['edit'])) {
	$proses -> edit();
}
if (isset($_GET['register'])) {
	$proses -> register();
}
if (isset($_GET['login'])) {
	$proses -> login();
}
 ?>