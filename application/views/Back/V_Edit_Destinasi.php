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
              <h3 class="box-title">Edit Data Destinasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(). 'C_Destinasi/update'; ?>" method="post">
            	<?php 
    			foreach($destinasi as $u){ 
    			?>
              <div class="box-body">
                <div class="form-group">
                  <label for="destinasi">Destinasi</label>
                  <input type="hidden" name="id_destinasi" value="<?php echo $u->id_destinasi ?>">
                  <input type="text" class="form-control" name="destinasi" id="destinasi" placeholder="Masukkan Destinasi" value="<?php echo $u->destinasi ?>">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea id="deskripsi" rows="3" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" valuer="<?php echo $u->deskripsi ?>"><?php echo $u->deskripsi ?></textarea>
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" value="<?php echo $u->harga ?>">
                </div>
                <div class="form-group">
                  <label for="gambar">Gambar</label>
                  <input type="file" id="gambar" name="gambar" value="<?php echo $u->gambar ?>">
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