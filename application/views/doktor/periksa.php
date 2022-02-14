<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
	        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cekperiksa" method="post">
		<table align="center">
			<div class="form_error">
          		<?php echo validation_errors(); ?>
        	</div>
        	<?php echo form_open(); ?>
			
			<tr>
				<td><h2>Hasil Periksa</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
				<tr>
				  	<td>
						  <label for="sel1">Pasien</label>
						<div class="form-group">
						  <input type="text" readonly class="form-control" value="<?php echo $pasien->nama ?>">
						  <input type="hidden" name="id_pas" value="<?php echo $id_pas ?>">
						  <br>
						  <br>
						</div>
					</td>
				 </tr>
			 <tr>
			  	<td>
					  <label for="sel1">Jenis Rawat</label>
					<div class="form-group">
					  <select class="form-control" id="sel1" name="jenis_rawat">
					    <option>---Pilih---</option>
					    <option value="Rawat Jalan">Rawat Jalan</option>
					    <option value="Rawat Inap">Rawat Inap</option>
					  </select>

			 	<br>
			 	<br>
					</div>
				</td>
			 </tr>

			 <tr>
			  <td><div class="form-group">
			    <label for="tglkun">Tanggal kunjungan</label>
			    <input type="date" class="form-control" id="tglkun" value="<?php echo (date('Y-m-d')); ?>" placeholder="Tanggal Kunjungan" name="tglkun">
			  </div></td>
			 </tr>
			 <tr>
			  	<td>
				<div class="form-group">
			    <label for="diagnosa">Diagnosa</label>
			    <input type="diagnosa" class="form-control" id="diagnosa" placeholder="Diagnosa" name="diagnosa">
			  </div>					  
				</td>
			 </tr>
			 <tr>
			  	<td>
				<div class="form-group">
			    <label for="resep">Resep</label>
			    <textarea type="resep" class="form-control" id="resep" placeholder="Resep" name="resep"></textarea>
			  </div>					  
				</td>
			 </tr>
			<tr>
			 	<br>
			 	<br>
				<td><input class="" type="submit" name="submit" value="submit">
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

<?php $this->load->view('main/headerdok'); ?>

<?php $this->load->view('main/footerdok'); ?>

