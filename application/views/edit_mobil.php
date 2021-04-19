<div class="box">
	<div class="box-header">
		Form Input Data Mobil
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/Updatemobil" method="POST">
		<?php
			foreach ($get_id_mobil as $tampilkan) { ?>

		<input type="hidden" name="id_mobil" value="<?php echo $tampilkan->id_mobil ?>">
		Merek Mobil 	<input type="text" name="merek_mobil" class="form-control" value="<?php echo $tampilkan->merek_mobil ?>">
		Nama Mobil 		<input type="text" name="nama_mobil" class="form-control" value="<?php echo $tampilkan->nama_mobil ?>">
		Harga  			<input type="text" name="harga" class="form-control" value="<?php echo $tampilkan->harga ?>">
		Stock 			<input type="text" name="stok" class="form-control" value="<?php echo $tampilkan->stok ?>">
		Keterangan 		<input type="text" name="keterangan" class="form-control" value="<?php echo $tampilkan->keterangan ?>">
		<button class="btn btn-primary btn-md pull-right" type="submit"><li class="fa fa-mail-forward"></li>SIMPAN</button>
		<?php	}
		?>
	</form>
</div>
</div>