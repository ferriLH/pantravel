<?php
$this->load->view("Front/Parts/V_Header");
$this->load->view("Front/Parts/V_Navigation");
?>
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url();?>assets/images/aboutus.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Galeri</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2>Semua Foto</h2>
                <form class="form-inline" action="<?php echo base_url('cari/search_keyword');?>" method = "get">
                    <div class="form-group">
                        <input class="btn btn-default" type="text" name = "keyword" />
                        <input class="btn btn-default" type="submit" value = "Search" />
                    </div>
                </form>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <ul id="fh5co-portfolio-list">
                    <?php
                    foreach ($galeri as $g){

                        ?>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(<?php echo base_url('images/'.$g->gambar);?>); ">
                            <a href="<?php echo base_url('images/'.$g->gambar);?>" target="_blank">
                                <div class="case-studies-summary">
                                    <span><?php echo $g->kategori;?></span>
                                    <h2><?php echo $g->nama_gambar?></h2>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view("Front/Parts/V_Footer");
?>
