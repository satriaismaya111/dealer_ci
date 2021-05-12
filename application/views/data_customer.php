
<div class="box">
  <div class="box-header">
    <h4>DATA CUSTOMER</h4>
  </div>

  <div class="box-body">
        <div class="mr-2">
            <a href="<?php echo base_url() ?>index.php/Welcome/Isicustomer">
                <button class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-plus"></i>Tambah data 
                </button>
            </a>
      </div>
    <table class="table table-bordered table-striped" id="example1">
      <thead>
        <td>ID Customer</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>No Telepon</td>
        <td>Keterangan</td>
        <td>Aksi</td>
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
          echo "<td><a href='Editcustomer/$tampilkan->id_customer'><button class='btn btn-success btn-xs'> EDIT </button></a>
           <button class='btn btn-danger btn-xs' onClick='hapus($tampilkan->id_customer)'> DELETE </button></td>";
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
              <form action="<?php echo base_url() ?>index.php/Welcome/Hapuscustomer" class="form-horizontal" id="form_hapus" method="POST">
                <input type="text" name="id_customer" value="">
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




