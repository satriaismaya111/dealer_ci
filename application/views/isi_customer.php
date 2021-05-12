<div class="box">
	<div class="box-header">
		Form Isi Data Customer
	</div>
	<div class="box-body">
	<form action=" <?php echo base_url() ?>index.php/Welcome/Simpancustomer" method="POST">
		Nama 				<input type="text" placeholder="Nama" name="nama" class="form-control">
		Alamat 				<input type="text" placeholder="Alamat" name="alamat" class="form-control">
		Jenis Kelamin 		<input type="text" placeholder="Jenis Kelamin" name="jk" class="form-control">
		No Telepon 			<input type="text" placeholder="No Telepon" name="no_telepon" class="form-control">
		Keterangan 			<input type="text" placeholder="Keterangan" name="keterangan" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check " type="submit"> SIMPAN</button>
	</form>
	</div>
</div>



