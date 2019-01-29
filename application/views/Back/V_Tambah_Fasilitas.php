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
              <h3 class="box-title">Input Data Fasilitas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
    foreach($fasilitas as $i){ 
      $id = $i->id_paket;
    }
    ?>
            <form role="form" action="<?php echo base_url(). 'C_Fasilitas/tambah_aksi/'.$id_paket; ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="fasilitas">Fasilitas</label>
                  <input type="text" class="form-control" name="fasilitas" id="fasilitas" placeholder="Masukkan Fasilitas">
                </div>
                <div class="form-group">
                  <?php foreach ($fasilitas as $f) { ?>
                  <input type="hidden" class="form-control" id="id_paket" name="id_paket" value="<?php echo $f->id_paket ?>">
                <?php } ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Compose">
              </div>
            </form>
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