<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <a href="<?php echo base_url(); ?>C_Paket/tambah" class="btn btn-primary" style="margin-left: 15px; margin-bottom: 20px;">Compose</a>
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Paket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Paket</th>
                  <th>Destinasi</th>
                  <th>Harga</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($paket as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->paket ?></td>
      <td><?php echo $u->destinasi ?></td>
      <td><?php echo $u->harga ?></td>
      <td><?php echo anchor('C_Paket/galeri/'.$u->id_paket,'<button class="btn btn-success" data-toggle="tooltip" title="Kelola Gambar!"><span class="fa fa-camera"></span></button>'); ?>
        <?php echo anchor('C_Paket/fasilitas/'.$u->id_paket,'<button class="btn btn-info" data-toggle="tooltip" title="Kelola Fasilitas!"><span class="fa fa-exchange"></span></button>'); ?>
      <?php echo anchor('C_Paket/edit/'.$u->id_paket,'<button class="btn btn-warning" data-toggle="tooltip" title="Edit Data!"><span class="fa fa-pencil" ></span></button>'); ?>
      <?php echo anchor('C_Paket/hapus/'.$u->id_paket,'<button class="btn btn-danger" data-toggle="tooltip" title="Hapus Data!"><span class="fa fa-trash"></span></button>'); ?></td>
    </tr>
    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->

         

      
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  $this->load->view("Back/Parts/V_Footer");
 ?>