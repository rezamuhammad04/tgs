<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url()?>index.php/tubes/update" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>PoliKlinik</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="poliklinik" value="<?php echo $u->poliklinik ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="namadokter" value="<?php echo $u->namadokter ?>"></td>
			</tr>
			<tr>
				<td>Jadwal</td>
				<td><input type="text" name="jadwal" value="<?php echo $u->jadwal ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>