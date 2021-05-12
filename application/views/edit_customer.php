<div class="box">
	<div class="box-header">
		Form Input Data Mobil
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/Updatecustomer" method="POST">
		<?php
			foreach ($get_id_customer as $tampilkan) { ?>

		<input type="hidden" name="id_customer" value="<?php echo $tampilkan->id_customer ?>">
		Nama 			<input type="text" name="nama" class="form-control" value="<?php echo $tampilkan->nama ?>">
		Alamat 			<input type="text" name="alamat" class="form-control" value="<?php echo $tampilkan->alamat ?>">
		Jenis Kelamin	<input type="text" name="jk" class="form-control" value="<?php echo $tampilkan->jk ?>">
		No Telepon 		<input type="text" name="no_telepon" class="form-control" value="<?php echo $tampilkan->no_telepon ?>">
		Keterangan 		<input type="text" name="keterangan" class="form-control" value="<?php echo $tampilkan->keterangan ?>">
		<button class="btn btn-primary btn-md pull-right" type="submit"><li class="fa fa-mail-forward"></li>SIMPAN</button>
		<?php	}
		?>
	</form>
</div>
</div>