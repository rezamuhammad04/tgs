<?php foreach ($rekams as $key => $r){ 
			if ($r->tglkun == date('Y-m-d')) {
		?>

		<table align="center" border="0">
			<tr>
				<td colspan="4"><h2 align="center">Cetak Rujukan Pasien</h2></td></tr>
				<tr><td colspan="4" align="center">Praktek: Jalan Majegan No. 29 Klaten</td></tr>
				<tr><td colspan="4" align="center">Telepon (0231)872113</td></tr>
				<tr><td colspan="4" align="left">Kepada Yth</td></tr>
				<tr><td colspan="4" align="left"><?=$r->namadokter?></td></tr>
					<tr><td colspan="4" align="left">Rumah Sakit Majegan</td></tr>
					<tr><td colspan="4" align="left"><br>Dengar Hormat,</td></tr>
					<tr><td colspan="4" align="left">Mohon perawatan lebih lanjut penderita tersebut di bawah ini :</td></tr>
					<tr><td>Nama</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->nama?></td></tr>
					<tr><td>Jenis Kelamin</td>
						<td>:</td>
						<td><?php echo $r->jenkel ?></td></tr>
					<tr><td>Umur</td>
						<td>:</td>
						<td><?php echo $r->umur ?> Tahun</td></tr>
					<tr><td>No. Telepon</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->nohp?></td></tr>
					<tr><td>Alamat</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->alamat?></td></tr>
					<tr><td>Keluhan Utama</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->diagnosa?></td></tr>	
					<tr><td>Tindakan Yang Dilakukan</td>
						<td>:</td>
						<td colspan="2"><?php echo $r->jenis_rawat?></td></tr>
					<tr><td colspan="4" align="Right" height="100px">Klaten <?php echo date('d-m-Y', strtotime($r->tglkun))  ?><br><br></td></tr>
					<tr><td colspan="4" align="Right" height="100px"><?=$r->namadokter?></td></tr>
		</table>
		<?php }} ?>
	<script>
		window.print();
	</script>