<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Resep</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek10" method="post">
		<table align="center">
			<tr>
				<td><h2>Cetak Resep Pasien</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="norekam">Masukan Nomor Rekam Medis Pasien</label>
			    <input type="text" class="form-control" id="norekam" placeholder="No.CM" name="norkm">
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-danger" type="submit" value="login">
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