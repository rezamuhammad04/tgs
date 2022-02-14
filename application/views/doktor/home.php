
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form>
      <div style="width: 600px;margin-left: 350px">
        <table class="table table-hover" align="center">
      
      <tr>
        <th>No</th>
        <th>Poliklinik</th>
        <th>Nama Pasien</th>
        <th>Tanggal Kunjungan</th>
        <th>No Antrian</th>
      </tr>

      <?php 
    $no = 1;
    foreach($user as $u){ 
    if ($u->tglkun == date('Y-m-d')) {
      # code...?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->pilpol?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo date('d-m-Y', strtotime($u->tglkun))  ?></td>
      <td><?php echo $u->noantrian?></td>


      
    </tr>
    <?php }} ?>
    </table>
    </div>
    </form>
    
</body>
</html>
 <?php $this->load->view('main/headerdok'); ?>

 <?php $this->load->view('main/footerdok'); ?>

