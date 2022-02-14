<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/tambahdokter" method="post">
		<table align="center">
			<tr>
				<td><h2>Input Dokter</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<div class="container">
			<tr>
			  	<td>
					  <label for="sel1">Pilih Poli</label>
					<div class="form-group">
					  <select class="" id="sel1" name="pilpol">
					    <option>---Pilih---</option>
					    <option value="Kardiologi">Kardiologi</option>
					    <option value="Urologi">Urologi</option>
					    <option value="Perawatan Gigi">Perawatan Gigi</option>
					    <option value="Perawatan Mata">Perawatan Mata</option>
					    <option value="Neurologi">Neurologi</option>
					    <option value="Operasi Plastik">Operasi Plastik</option>
					  </select>
					  <br>
					  <br>
				</td>
			 </tr>
			</div>
			<div class="form-group">
				<tr>
			 	<td>
     			<label for="username">username</label>
      			<input type="text" class="form-control" id="username" placeholder="username" name="username">
      			<br>
   				</td>
   				</tr>	 
   				 </div><div class="form-group">
				<tr>
			 	<td>
     			<label for="password">Password</label>
      			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
      			<br>
   				</td>
   				</tr>	 
   				 </div>
			 <div class="form-group">
				<tr>
			 	<td>
     			<label for="namadokter">Nama Dokter</label>
      			<input type="text" class="form-control" id="namadokter" placeholder="Input Nama Dokter" name="namadokter">
      			<br>
   				</td>
   				</tr>	 
   				 </div>

   				 <div class="form-group">
				<tr>
			 	<td>
     			<label for="notlp">Nomor Telepon</label>
      			<input type="text" class="form-control" id="notlp" placeholder="Masukan Nomor Telepon" name="notlp">
      			<br>
   				</td>
   				</tr>	 
   				 </div>

   				 <div class="form-group">
				<tr>
			 	<td>
     			<label for="alamat">Alamat</label>
      			<textarea type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamatdok"></textarea>
      			<br>
   				</td>
   				</tr>	 
   				 </div>

					  <br>
    		 	<div class="form-group">
    		 	<tr>
    		 	<td>
     		 <label for="jadwal">Jadwal Dokter</label>

     			<input type="text" class="form-control" id="jadwal" placeholder="Jadwal Dokter" name="jadwal">
     			<br>
    			</td>
    			</tr>
    			</div>

			 <tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit">
					</div>
				<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</td>
			</tr>
			</table>
</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>