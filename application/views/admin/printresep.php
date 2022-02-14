		<?php foreach ($rekams as $key => $r){ 
			if ($r->tglkun == date('Y-m-d')) {
		?>

		<table align="center" border="0">
			<tr>
				<td colspan="4"><h2 align="center">Cetak Resep Pasien</h2></td></tr>
				<tr><td colspan="4" align="center"><?=$r->namadokter?></td></tr>
				<tr><td colspan="4" align="center">Praktek: Jalan Majegan No. 29 Klaten</td></tr>
					<tr><td colspan="4" align="center">Telepon (0231)872113</td></tr>
					<tr><td colspan="4" align="Right" height="100px"><hr>Klaten <?php echo date('d-m-Y', strtotime($r->tglkun))  ?></hr></td></tr>
					<tr><td>Resep</td>
						<td>:</td>
						<td width="100px"></td>
						<td><?php echo $r->resep?></td>
					</tr>
					<tr><td><br><br></td></tr>
					<tr><td colspan="4"><hr></td></tr>
					<tr><td>Nama</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->nama?></td></tr>
					<tr><td>Umur</td>
						<td>:</td>
						<td><?php echo $r->umur ?> Tahun</td></tr>
					<tr><td>Alamat</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->alamat?></td></tr>
		</table>
		<?php }} ?>
	<script>
		window.print();
	</script>
	
