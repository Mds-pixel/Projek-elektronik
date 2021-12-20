 
	<!-- cek apakah sudah login -->
	<?php 


    include 'koneksi.php';
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}


    $email =$_SESSION['email'];


    $dc = mysqli_query($db, "select * from user where email='$email'");
            while ($d = mysqli_fetch_array($dc)){ echo $d['id_user'];

	

//ambil data dari form
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$nama_prod = $_POST['nprod'];
$kategori = $_POST['ktgr'];
$fotopro = $_POST['fotopro'];
$jml_barang = $_POST['jml_barang'];
$id_user = $d['id_user'];}





//masukan ke database
mysqli_query($db,"INSERT INTO produk VALUES('','$id_user','$deskripsi','$harga','$nama_prod','$kategori','$fotopro','$jml_barang')");




//kembalikan ke halaman awal
if($kategori == "handphone")
{echo  header ("location:index.php?hal=handphone");}
elseif($kategori == "Peralatan Dapur")
{echo  header("location:index.php?hal=Peralatan Dapur");}

?>