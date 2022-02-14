<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
	        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="container" style="margin-left: 260px;">
		
	<div class="row" >
		<div class="col-md-6">
			<h2>Nomor Antrian</h2>
			<h2><?php echo isset($pasien->noantrian) ? $pasien->noantrian : 'Tidak ada pasien' ?></h2>
			<?php if (isset($pasien->noantrian)): ?>
			<h5><?php echo $pasien->pilpol ?></h5>				
			<a href="<?php echo site_url('tubes/cancel/'.$pasien->id1) ?>" class="btn btn-primary">Cancel <i class="fa fa-arrow-right"></i></a>
			<a href="<?php echo site_url('tubes/periksa/'.$pasien->id_pas) ?>" class="btn btn-primary">Selanjutnya <i class="fa fa-arrow-right"></i></a>
			<?php endif ?>
		</div>
	</div>
	</div>
</body>
</html>

<?php $this->load->view('main/headerdok'); ?>

<?php $this->load->view('main/footerdok'); ?>

