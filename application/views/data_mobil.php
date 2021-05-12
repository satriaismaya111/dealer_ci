
<div class="box">
	<div class="box-header">
		<h4>DATA MOBIL</h4>
	</div>

	<div class="box-body">
        <div class="mr-2">
            <a href="<?php echo base_url() ?>index.php/Welcome/Isimobil">
                <button class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-plus"></i>Tambah data 
                </button>
            </a>
      </div>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Pesan Hapus Data</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/Hapusmobil" class="form-horizontal" id="form_hapus" method="POST">
                <input type="text" name="id_mobil" value="">
                <p>
                  Apakah Anda Ingin Menghapus Data Ini?
                </p>
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><li class="fa fa-undo"></li>Batal</button>
                <button type="submit" class="btn btn-danger pull-right"><li class="fa fa-check"></li>YA</button>
              </form>
            </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




