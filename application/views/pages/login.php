<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="">
			<section class="section_gap team_area lite_bg">
				<div class="container">

				<div><h1>Registrasi Pasien<h1></div><br>
				
					<div>
					  <label for="sel1">Pilih Jenis Pasien</label><br>
					 <button class="btn btn-lg"><a href="<?php echo base_url()?>index.php/lama">Pasien Lama</a></button>
					 <button class="btn btn-lg"><a href="<?php echo base_url()?>index.php/baru">Pasien baru</a></button>
					
					</div>
	</section>
	</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>

 
