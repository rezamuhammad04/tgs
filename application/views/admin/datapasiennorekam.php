<?php $this->load->view('main/header1'); ?>

<div class="container py-4">
	
<table class="table table-hover" id="myTable">
	<thead>
		<tr>
			<th>No</th>
			<th>Nomor Rekam</th>
			<th>Nama Pasien</th>
			<th>Nama Dokter</th>
			<th>Poliklinik</th>
			<th>Jenis Rawat</th>
			<th>Tanggal Kunjungan</th>
			<th>Diagnosa</th>
			<th>Resep</th>
			<th>Aksi</th>
			<th>Rujukan</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($rekam as $key => $r): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $r->norkm ?></td>
				<td><?php echo $r->nama ?></td>
				<td><?php echo $r->namadokter ?></td>
				<td><?php echo $r->pilpol ?></td>
				<td><?php echo $r->jenis_rawat ?></td>
				<td><?php echo date('d-m-Y', strtotime($r->tglkun))  ?></td>
				<td><?php echo $r->diagnosa ?></td>
				<td><?php echo $r->resep ?></td>
				<td>
					<?php if ($r->norkm === null): ?>
						<a href="<?php echo site_url('tubes/inputnorekampasien/'.$r->id_rekam) ?>" class="btn btn-sm btn-primary">Input No. Rekam</a>
					<?php endif ?>
				</td>

				<td>
					<?php if ($r->jenis_rawat === 'Rawat Inap'): ?>
						<a href="<?php echo site_url('tubes/cetakrujukan/'.$r->norkm) ?>" class="btn btn-sm btn-danger">Cetak</a>
					<?php endif ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>

<?php $this->load->view('main/footer'); ?>