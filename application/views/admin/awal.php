 <?php $this->load->view('main/headerawal'); ?>
<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<button class="btn-lg"><a href="<?php echo base_url()?>index.php/home">User</a></button>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button class="btn-lg"><a href="<?php echo base_url()?>index.php/tubes/logadmin">Admin</a></button>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button class="btn-lg"><a href="<?php echo base_url()?>index.php/tubes/logdok">Dokter</a></button>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->


	<?php $this->load->view('main/footer'); ?>