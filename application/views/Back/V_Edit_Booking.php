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
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Booking</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url().'C_Booking/update'; ?>" method="post">
              <?php 
          foreach($booking as $u){ 
          ?>
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_depan">Nama Depan</label>
                  <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Masukkan Nama Depan" value="<?php echo $u->nama_depan ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_belakang">Nama Belakang</label>
                  <input type="text" id="nama_belakang" class="form-control" name="nama_belakang" placeholder="Masukkan Nama Belakang" value="<?php echo $u->nama_belakang ?>">
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?php echo $u->email ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="no_ktp">No. KTP</label>
                  <input type="text" id="no_ktp" class="form-control" name="no_ktp" placeholder="Masukkan No. KTP" value="<?php echo $u->no_ktp ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="no_hp">No. HandPhone</label>
                  <input type="text" id="no_hp" class="form-control" name="no_hp" placeholder="Masukkan No. HandPhone" value="<?php echo $u->no_hp ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tanggal_berangkat">Tanggal Berangkat</label>
                  <input type="date" id="tanggal_berangkat" class="form-control" name="tgl_berangkat" placeholder="Masukkan Tanggal Berangkat" value="<?php echo $u->tgl_berangkat ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="jml_peserta">Jumlah Peserta</label>
                  <input type="number" id="jml_peserta" class="form-control" name="jml_peserta" placeholder="Masukkan Jumlah Peserta" value="<?php echo $u->jml_peserta ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea id="alamat" rows="3" class="form-control" name="alamat" placeholder="Masukkan Alamat"><?php echo $u->alamat ?></textarea>
                </div>
              </div>
                <input type="hidden" name="status" value="<?php echo $u->status ?>">
                <input type="hidden" name="id_booking" value="<?php echo $u->id_booking ?>">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="paket">Paket</label>
                  <select class="form-control" name="paket" id="paket">
                    <?php 
                      foreach($paket as $p){ 
                    ?>
                    <option value="<?php echo $p->id_paket ?>" selected>
                      <?php echo $p->paket." - ".$p->destinasi; ?>
                    </option>
                  <?php } ?>
                  </select>
                </div>
              </div>
              </div>
            <?php } ?>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Compose">
              </div>
            </form>
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