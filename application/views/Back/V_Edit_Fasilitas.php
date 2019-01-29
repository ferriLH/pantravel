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
              <h3 class="box-title">Edit Data Fasilitas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <?php 
              foreach($fasilitas as $i){ 
              $id = $i->id_paket;
            }
            ?>
            <form role="form" action="<?php echo base_url(). 'C_Fasilitas/update/'.$id; ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <?php foreach ($fasilitas as $f) { ?>
                  <label for="fasilitas">Fasilitas</label>
                  <input type="text" class="form-control" name="fasilitas" id="fasilitas" placeholder="Masukkan Fasilitas" value="<?php echo $f->fasilitas ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id_fasilitas" name="id_fasilitas" value="<?php echo $f->id_fasilitas ?>">
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