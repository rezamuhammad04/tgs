<?php $this->load->view('main/header1'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek2" method="post">
		<table align="center">
			<div class="form_error">
          		<?php echo validation_errors(); ?>
        	</div>
        	<?php echo form_open(); ?>
			
			<tr>
				<td><h2>Pemilihan Poli Yang Dituju</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			
			<tr>
			  	<td>
					  <label for="sel1">Pilih Poli</label>
					<div class="form-group">
					  <select class="" id="poli" name="pilpol">
					    <option>---Pilih---</option>
					    <option value="Kardiologi">Kardiologi</option>
					    <option value="Urologi">Urologi</option>
					    <option value="Perawatan Gigi">Perawatan Gigi</option>
					    <option value="Perawatan Mata">Perawatan Mata</option>
					    <option value="Neurologi">Neurologi</option>
					    <option value="Operasi Plastik">Operasi Plastik</option>
					  </select>
					  <br>
					  <br>
					</div>
				</td>
			 </tr>
			 <tr>
			  	<td>
					  <label for="sel1">Pilih Dokter</label>
					<div class="form-group">
					  <select class="doks" name="id_dok" id="pildok">
					    <option>---Pilih---</option>
					  </select>
					  <br>
					  <br>
					</div>
	</td>
			 </tr>
			 <tr>
			  	<td>
					  <label for="sel1">Pasien</label>
					<div class="form-group">
					    <input type="text" readonly class="form-control"  value="<?php echo $this->session->userdata("nama") ?>">
					    <input type="hidden" name="id_pas" value="<?php echo $this->session->userdata("id_pas") ?>">
					  </select>
					</div>
				</td>
			 </tr> 
			 <tr>
			  <td><div class="form-group">
			    <label for="tglkun">Tanggal kunjungan</label>
			    <input type="date" class="form-control" id="tglkun" value="<?php echo (date('Y-m-d')); ?>" placeholder="Tanggal Kunjungan" name="tglkun">
			  </div></td>
			 </tr>
			<tr>
			  	<td>
					  <label for="sel1">Pembayaran</label>
					<div class="form-group">
					  <select class="" id="sel1" name="pembayaran">
					    <option>---Pilih---</option>
					    <option>Umum</option>
					    <option>BPJS</option>
					  </select>

			 	<br>
			 	<br>
					</div>
				</td>
			 </tr>
			 <tr>
			 	<br>
			 	<br>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</td>
			</tr>
			</table>
</form>
<script src="<?php echo base_url()?>file/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>file/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#poli').change(function(e){
        	console.log(e.target.value);
            var id = e.target.value;
            $("#pildok").empty();
            $("#pildok").append("<option>--Pilih--</option>");
            $.ajax({
                url : "<?php echo base_url();?>index.php/tubes/getdokbypoli",
                method : "POST",
                data: {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                	console.log(data);
                	console.log($("#pildok"));
                	for(let i = 0;i < data.length;i++) {
                		$("#pildok").append("<option value='"+data[i].id_dok+"'>"+data[i].namadokter+"</option>");
                		$("#pildok").niceSelect("update");
                	}
                    /*var html = "";
                    var i;
                    for(i=0; i<data.length; i++){
                        html += "<option value='"+data[i].id_dok+"''>"+data[i].namadokter+"</option>";
                  		
                    }
                    $('.doks').html(html);*/
                }
            });
        });
    });
</script>

</body>
</html>

<?php $this->load->view('main/footer'); ?>