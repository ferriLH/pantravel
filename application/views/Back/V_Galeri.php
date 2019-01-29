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
        <a href="<?php echo base_url(); ?>admin/add_galeri" class="btn btn-primary" style="margin-left: 15px; margin-bottom: 20px;">Compose</a>
          <form method="post" action="<?php echo base_url(); ?>C_Galeri">
<!--            <div class="col-md-12">-->
<!--            <div class="form-group">-->
<!--                  <label for="destinasi">Pilih Paket</label>-->
<!--                  <select class="form-control" name="id_paket">-->
<!--                    --><?php //foreach ($tampil_paket as $p) { ?>
<!--                    <option value="--><?php //echo $p->id_paket ?><!--">--><?php //echo $p->paket." ";echo $p->destinasi ?><!--</option>-->
<!--                  --><?php //} ?>
<!--                  </select>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-12">-->
<!--            <div class="form-group">-->
<!--              <input type="submit" name="" class="btn btn-success" value="Choose">-->
<!--            </div>-->
<!--            </div>-->
          </form>
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Galeri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Gambar</th>
                  <th>Kategori</th>
                  <th>Gambar</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($galeri as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->nama_gambar ?></td>
      <td><?php if($u->kategori==null){echo "Uncategorized";}else{echo $u->kategori;} ?></td>
      <td><img src="<?php echo base_url('images/'.$u->gambar); ?>" alt="<?php echo $u->gambar; ?>" width="50" height="50" /></td>
      <td><a href="<?php echo base_url('C_Galeri/edit/'.$u->id_galeri); ?>" class="btn btn-warning" data-toggle="tooltip" title="Edit Data!"><span class="fa fa-pencil" ></span></a>
            <?php
            $hapus = array(
                'class' => 'btn btn-danger',
                'data-toggle' => 'tooltip',
                'title' => 'Hapus Data!',
                'onclick' => 'javascript: return confirm(\'Anda yakin menghapus ' . $u->nama_gambar . '?\')'
            );
            echo anchor(site_url('C_Galeri/delete/' . $u->id_galeri), '<span class="fa fa-trash"></span>', $hapus);
            ?>
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