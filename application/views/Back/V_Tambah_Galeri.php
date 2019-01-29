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
          <?php echo $this->session->userdata('message'); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Galeri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php echo form_open_multipart('C_Galeri/store'); ?>
              
              <div class="box-body">
                <div class="form-group">
                  <?php echo form_label('Nama File', 'namaFile'); ?>
                  <?php echo form_error('nama_file'); ?>
                  <?php
                  $data = array('type' => 'text',
                              'name' => 'nama_file',
                              'class' => 'form-control',
                              'id' => 'namaFile',
                              'placeholder' => 'Nama File',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
                </div>
                  <div class="form-group">
                      <?php echo form_label('Kategori', 'kat'); ?>
                      <?php echo form_error('kategori'); ?>
                      <?php
                      $data = array('type' => 'text',
                          'name' => 'kategori',
                          'class' => 'form-control',
                          'id' => 'kat',
                          'placeholder' => 'Kategori',
                          'autofocus' => 'autofocus'
                      );
                      echo form_input($data);
                      ?>
                  </div>
                <?php //foreach ($galeri as $g) { ?>
<!--                  <input type="hidden" class="form-control" id="id_paket" name="id_paket" value="--><?php //echo $galeri;//$g->id_paket ?><!--">-->
                <?php //} ?>
                <div class="form-group">
                  <label>File Foto</label> <span class="label label-success">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
            <?php echo form_error('filefoto'); ?>
            <div id="image-preview">
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="filefoto" id="image-upload" required/>
            </div>
          </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('admin/data_galeri'), 'Kembali', 'class="btn btn-default"'); ?>
          <?php echo form_submit('submit', 'Tambah', 'class="btn btn-primary"'); ?>
              </div>
        <?php echo form_close(); ?>
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