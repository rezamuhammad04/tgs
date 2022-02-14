<?php $this->load->view('main/header1'); ?>

<section class="home_banner_area">
		<div class="banner_inner">

			<div class="container">
				
				<div class="banner_content">
					
					<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
						<h2>SELAMAT DATANG REGISTRASI ADMIN</h2>
						<div class="about_inner">

	<form action="<?php echo base_url(); ?>index.php/tubes/aksi_regis" method = 'post'>
  <div class="form-group">
    <label for="nama">nama:</label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="email">email:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
   <div class="form-group">
    <label for="username">username:</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="passbaru">password:</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
 
	</form>
						</div>

					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('main/footer'); ?>