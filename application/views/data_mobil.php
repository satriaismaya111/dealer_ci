<div class="box">
	<div class="box-header">
		Form input Data Mobil
	</div>
	<div class="box-body">
	<form action=" <?php echo base_url() ?>index.php/Welcome/Simpanmobil" method="POST">
		Merek Mobil <input type="text" placeholder="Merek Mobil" name="merek_mobil" class="form-control">
		Nama Mobil <input type="text" placeholder="Nama Mobil" name="nama_mobil" class="form-control">
		Harga <input type="text" placeholder="Harga" name="harga" class="form-control">
		Stock <input type="text" placeholder="Stock" name="stok" class="form-control">
		Keterangan <input type="text" placeholder="Keterangan" name="keterangan" class="form-control">
		<br>
		<button class="btn btn-primary btn-md pull-right fa fa-check " type="submit"> SIMPAN</button>
	</form>
	</div>
</div>

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
		</table>
	</div>
</div>
<script>
	function hapus(id){
		$('#modal_form_hapus').modal('show');
	}
</script>
<!---MODAL--->
<div class="modal modal-danger fade" id="modal_form_hapus">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning!!!</h4>
              </div>
              <div class="modal-body">
              	<form action="<?php echo base_url() ?>index.php/Welcome/Hapusmobil" class="form-horizontal" id="form_hapus" method="POST">
                <input type="hidden" name="id_mobil" value="">
                <p>Menghapus Akan Menghilangkan Data Secara Permanen&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">CANCEL</button>
                <button type="button" class="btn btn-outline">YES</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




