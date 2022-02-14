<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek1" method="post">
		<?php echo validation_errors(); ?>
		<table align="center">
			<tr>
				<td><h2>Registrasi Pasien Lama</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="norekam">No.Rekam Medis</label>
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