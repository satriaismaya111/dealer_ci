<div class="box">
	<div class="box-header">
		Form Isi Data Customer
	</div>
	<div class="box-body">
	<form action=" <?php echo base_url() ?>index.php/Welcome/Simpancustomer" method="POST">
		Nama 				<input type="text" placeholder="Nama" name="nama" class="form-control">
		Alamat 				<input type="text" placeholder="Alamat" name="alamat" class="form-control">
		Jenis Kelamin 		<input type="text" placeholder="Jenis Kelamin" name="jk" class="form-control">
		Nomor Telephone 	<input type="text" placeholder="Nomor Telephone" name="no_telepon" class="form-control">
		Keterangan 			<input type="text" placeholder="Keterangan" name="keterangan" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check " type="submit"> SIMPAN</button>
	</form>
	</div>
</div>

<div class="box">
	<div class="box-header">
		<h4>DATA CUSTOMER</h4>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped" id="example1">
			<thead>
				<td>ID Customer</td>
				<td>Nama</td>
				<td>Alamat</td>
				<td>Jenis Kelamin</td>
				<td>Nomor Telephone</td>
				<td>Keterangan</td>
			</thead>
			<?php
			foreach ($datacustomer as $tampilkan) {
			 	echo "<tr>";
			 		echo "<td>$tampilkan->id_customer</td>";
			 		echo "<td>$tampilkan->nama</td>";
			 		echo "<td>$tampilkan->alamat</td>";
			 		echo "<td>$tampilkan->jk</td>";
			 		echo "<td>$tampilkan->no_telepon</td>";
			 		echo "<td>$tampilkan->keterangan</td>";
			 	echo "</tr>";
			 } 
			?>
        <!-- /.modal -->




