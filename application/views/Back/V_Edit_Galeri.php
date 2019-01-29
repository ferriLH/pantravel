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
              <h3 class="box-title">Edit Data Galeri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('C_Galeri/update/'.$id_galeri); ?>
              <div class="box-body">
                <div class="form-group">
                  <?php echo form_label('Nama File', 'namaFile'); ?>
            <?php echo form_error('nama_file'); ?>
            <?php
                $data = array('type' => 'text',
                              'name' => 'nama_file',
                              'value' => set_value('nama_gambar', $nama_gambar),
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
                          'value' => set_value('kategori', $kategori),
                          'class' => 'form-control',
                          'id' => 'kat',
                          'placeholder' => 'Kategori',
                          'autofocus' => 'autofocus'
                      );
                      echo form_input($data);
                      ?>
                  </div>
                <div class="form-group">
                  <label>File Foto</label> <span class="label label-success">Ukuran maksimal 2 MB. Format file: jpeg, jpg, dan png.</span>
            <?php echo form_error('filefoto'); ?>
            <!-- style:background-image is the main actor to show preview image while edit  -->
            <img src="">
            <div id="image-preview">
              <img src="<?php echo base_url('images/'.$gambar); ?>" alt="<?php echo $gambar; ?>" width="50" height="50" />
            </div>
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="filefoto" value="<?php echo base_url('images/'.$gambar); ?>" id="image-upload"/>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('admin/data_galeri'), 'Kembali', 'class="btn btn-default"'); ?>
                <?php echo form_submit('submit', 'Ubah', 'class="btn btn-warning"'); ?>
          <?php echo form_hidden('id', $id_galeri); ?>
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