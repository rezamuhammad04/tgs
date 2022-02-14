<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<section class="section_gap team_area lite_bg">
      <div class="container">
    <h2 align="center">Jadwal Dokter</h2>
            <br>
            <br>
    <thead>
  <table class="table table-striped">
      
      <tr>
        <th>No</th>
        <th>Poliklinik</th>
        <th>Nama Dokter</th>
        <th>Jadwal</th>
      </tr>

      <?php 
    $no = 1;
    foreach($user as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->pilpol ?></td>
      <td><?php echo $u->namadokter ?></td>
      <td><?php echo $u->jadwal ?></td>


      
    </tr>
    <?php } ?>
    </table>

</div>
		</div>
</section>
	</form>
</body>
</html>
<?php $this->load->view('main/footer'); ?>