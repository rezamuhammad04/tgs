<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek3" method="post">
		<?php echo validation_errors(); ?>
		<table align="center">
			<tr>
				<td><h2>Registrasi Pasien Baru</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<div class=""></div>
			<tr>
			  <td><div class="form-group">
			    <label for="nama">Nama Pasien</label>
			    <input type="text" class="form-control" id="nama" placeholder="Nama Pasien" name="nama" value="<?php if(isset($dataa1->nama)) echo $dataa1->nama;?>">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="noidentitas">No Kartu Identitas</label>
			    <input type="text" class="form-control" id="noidentitas" placeholder="No kartu Identitas" name="noidentitas" value="<?php if(isset($dataa1->noidentitas)) echo $dataa1->noidentitas;?>">
			  </div></td>
			 </tr>
			 <tr>
			   <td><div class="form-group">
			   	<label for="jenkel">Jenis Kelamin</label><br>
			    <select name="jenkel" value="<?php if(isset($dataa1->norekam)) echo $dataa1->norekam;?>"><br>
			    	<option>---PILIH---</option>
			    	<option value="Laki-laki">Laki-laki</option>
			    	<option value="Perempuan">Perempuan</option>
			    </select>
			    <br>
			    <br>
			  </div></td>
			 </tr>
			 <br>
			 <tr>
			  <td><div class="form-group">
			    <label for="tgllahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir" value="<?php if(isset($dataa1->tgllahir)) echo $dataa1->tgllahir;?>">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="umur">Umur</label>
			    <input type="text" class="form-control" id="umur" placeholder="Masukan Umur Anda" name="umur" value="<?php if(isset($dataa1->umur)) echo $dataa1->umur;?>">
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tgllahir">Alamat</label>
			    <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?php if(isset($dataa1->alamat)) echo $dataa1->alamat;?>"></textarea>
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="nohp">Nomor Handphone</label>
			    <input type="text" class="form-control" id="nohp"  placeholder="Nomor Handphone Anda" name="nohp" value="<?php if(isset($dataa1->nohp)) echo $dataa1->nohp;?>">
			  </div></td>
			  <td>
			  	<input type="text" name="id_pas" value="<?php if(isset($dataa1->id_pas)) echo $dataa1->id_pas;?>"hidden>
			  </td>
			 </tr>
			 <tr>
				<td><input class="btn btn-primary" type="submit"  name="submit"  value="submit">
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