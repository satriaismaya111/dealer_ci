<div class="box">
	<div class="box-header">
		<h4>DATA MOBIL</h4>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped" id="example1">
			<thead>
				<td>ID Mobil</td>
				<td>Merek Mobil</td>
				<td>Nama Mobil</td>
				<td>Harga</td>
				<td>Stock</td>
				<td>Keterangan</td>
				<td>Aksi</td>
			</thead>
			<?php
			foreach ($datamobil as $tampilkan) {
			 	echo "<tr>";
			 		echo "<td>$tampilkan->id_mobil</td>";
			 		echo "<td>$tampilkan->merek_mobil</td>";
			 		echo "<td>$tampilkan->nama_mobil</td>";
			 		echo "<td>$tampilkan->harga</td>";
			 		echo "<td>$tampilkan->stok</td>";
			 		echo "<td>$tampilkan->keterangan</td>";
			 		echo "<td><a href='Editmobil/$tampilkan->id_mobil'><button class='btn btn-success btn-xs'> EDIT </button></a>
			 		 <button class='btn btn-danger btn-xs' onClick='hapus($tampilkan->id_mobil)'> DELETE </button></td>";
			 	echo "</tr>";
			 } 
			?>