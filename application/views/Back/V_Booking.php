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
        <a href="<?php echo base_url(); ?>C_Booking/tambah" class="btn btn-primary" style="margin-left: 15px; margin-bottom: 20px;">Compose</a>
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Booking</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Email</th>
                  <th>No. KTP</th>
                  <th>No. HP</th>
                  <th>Paket</th>
                  <th>Tanggal Berangkat</th>
                  <th>Jumlah Peserta</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Edit</th>
                    <th>Delete</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($booking as $u){ 
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nama_depan ?></td>
        <td><?php echo $u->nama_belakang ?></td>
        <td><?php echo $u->email ?></td>
        <td><?php echo $u->no_ktp ?></td>
        <td><?php echo $u->no_hp ?></td>
        <td><?php echo $u->paket ?></td>
        <td><?php echo $u->tgl_berangkat ?></td>
        <td><?php echo $u->jml_peserta ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->status ?></td>
        <td>
            <?php echo anchor('C_Booking/edit/'.$u->id_booking,'<button class="btn btn-warning" data-toggle="tooltip" title="Edit Data!"><span class="fa fa-pencil" ></span></button>'); ?>
        </td>
        <td>
            <?php echo anchor('C_Booking/hapus/'.$u->id_booking,'<button class="btn btn-danger" data-toggle="tooltip" title="Hapus Data!"><span class="fa fa-trash"></span></button>'); ?>
        </td>
        <td>
            <?php echo anchor('C_Booking/status/'.$u->id_booking,'<button class="btn btn-success" data-toggle="tooltip" title="Update Status!"><span class="fa fa-exchange"></span></button>'); ?>
        </td>
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