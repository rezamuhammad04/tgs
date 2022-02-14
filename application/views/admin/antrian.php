<?php $this->load->view('main/header'); ?><!-- 

<?php //echo $this->session->userdata("norkm");?> -->

<!DOCTYPE html>
<html>
<head>
	<title>No.Antrian</title>
</head>
<body>
	<form action="">
			<section class="section_gap team_area lite_bg">
				<div class="container">
					<div>
							<h1>Nomor Antrian : <br><?php echo $this->session->userdata("noantrian");?></h1><br>
							Tanggal Kunjungan : <?php echo $this->session->userdata("tglkun");?>


					</div>
	</section>
	</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>