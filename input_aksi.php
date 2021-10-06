<!DOCTYPE html>
<html>
<body>
<head><title></title></head>
<h1>My first PHP page</h1>
<a href="input_ta.php"></a>
<table width="200" border="1">
  <tr>
    <td><div align="center" class="style1"><a href='./input_ta.php'>input kembali</a></div></td>
  </tr>
</table>
<a href="input_ta.php"></a>
<br />
<?php 

include('koneksi.php');


$id=$_POST['tid'];
$nama=$_POST['tnama'];
$nim=$_POST['tnim'];
$jurusan=$_POST['tjurusan'];

// 
$query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$id','$nama','$nim','$jurusan')");
if($query) {
	//header('location:reg.php?message=success');
echo"No id anda = $id <br>";
echo"Nama = $nama <br>";
echo"Kelas = $nim  <br>";
echo"Judul = $jurusan  <br>";
	}
?>

</body>
</html>