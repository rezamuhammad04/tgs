<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	<form action="<?php echo base_url()?>index.php/tubes/tambah_aksi" method="post">
		<table border="1" align="center">
			<tr>
				<td>Poliklinik</td>
				<td><input type="text" name="poliklinik"></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="namadokter"></td>
			</tr>
			<tr>
				<td>Jadwal</td>
				<td><input type="text" name="jadwal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>