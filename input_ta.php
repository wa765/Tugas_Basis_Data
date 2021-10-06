<!DOCTYPE html>
<html>
<head>
	<title>form input tugas akhir</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="judul">		
		
	</div>
	
	<br/>

	<button class="btn btn-danger"><h1>Input Data Pengajuan Judul Tugas Akhir</h1></button>
	
	
	<form class="form-horizontal" action="./input_aksi.php" method="post">	
	
				<div class="form-group">
				<label class="control-label col-sm-1" for="id">id :</label>
				<div class="col-sm-2"> 
		        <input name="tid" type="text" class="form-control" size="20">
			    </div>	
				</div>
							
			
				<div class="form-group">
				<label class="control-label col-sm-1" for="nama">Nama :</label>
				<div class="col-sm-3"> 
		        <input name="tnama" type="text" class="form-control" size="20">
			    </div>
				</div>
				
				<div class="form-group">
				<label class="control-label col-sm-1" for="nim">nim :</label>
				<div class="col-sm-2"> 
		        <input name="tnim" type="text" class="form-control" size="20">
			    </div>	
				</div>
							
			
				<div class="form-group">
				<label class="control-label col-sm-1" for="jurusan"> Jurusan :</label>
				<div class="col-sm-4"> 
		        <input name="tjurusan" type="text" class="form-control" size="20">
			    </div>	
				</div>										
			  <button type="submit" value="Simpan" class="btn btn-primary">SIMPAN</button>
			 <!-- <a href="lihat.php">LIHAT TABEL </a></strong>              -->
	</form>
</body>
</html>
