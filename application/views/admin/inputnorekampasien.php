<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo site_url("tubes/cek7/".$id_rekam)?>" method="post">
		<table align="center">
			<tr>
				<td><h2>Input No Rekam</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="norekam">No.Rekam </label>
			    <input type="text" class="form-control" id="norekam" placeholder="Masukan No. Rekam" name="norkm">
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-danger" type="submit" value="input">
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