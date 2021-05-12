<div class="box">
	<div class="box-header">
		Form Isi Data Mobil
	</div>
	<div class="box-body">
	<form action=" <?php echo base_url() ?>index.php/Welcome/Simpanmobil" method="POST">
		Merek Mobil 				<input type="text" placeholder="Merek Mobil" name="merek_mobil" class="form-control">
		Nama Mobil 				<input type="text" placeholder="Nama Mobil" name="nama_mobil" class="form-control">
		Harga 		<input type="text" placeholder="Harga" name="harga" class="form-control">
		Stock 	<input type="text" placeholder="Stock" name="stok" class="form-control">
		Keterangan 			<input type="text" placeholder="Keterangan" name="keterangan" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check " type="submit"> SIMPAN</button>
	</form>
	</div>
</div>



