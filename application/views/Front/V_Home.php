<?php
$this->load->view("Front/Parts/V_Header");
$this->load->view("Front/Parts/V_Navigation");
?>

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo base_url();?>assets/images/bego.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Hubungi kami dan biarkan kami yang mengurus semua event dan perjalanan wisata anda</h1>
<!--                        <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>-->
<!--                        <p><a href="https://www.youtube.com/watch?v=QoitiIbdeaM" class="btn btn-primary popup-vimeo">Watch Our Video</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span><img class="img-responsive" src="<?php echo base_url();?>assets/images/hotel_res.png" alt=""></span>
                    <h3>Reservasi Hotel</h3>
                    <p>Setelah menikmati keindahan alam akan sangat menyenangkan jika bisa beristirahat di hotel yang nyaman dan indah dengan banyak pilihan budget yang sesuai dengan kebutuhan anda</p>
                    <p><a href="<?php echo base_url('');?>products/reservasi" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span><img class="img-responsive" src="<?php echo base_url();?>assets/images/meeting.svg" alt=""></span>
                    <h3>Paket Meeting</h3>
                    <p>Salah satu faktor kesuksesan pelaksanaan meeting adalah tersedianya semua fasilitas yang memadai dan juga lengkap. Kami akan memberikan pilhan hotel dan fasilitas yang dibutuhkan sesuai dengan kebutuhan perusahaan</p>
                    <p><a href="<?php echo base_url('');?>products/meeting" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span><img class="img-responsive" src="<?php echo base_url();?>assets/images/group.png" alt=""></span>
                    <h3>Paket Group</h3>
                    <p>Berwisata dalam bentuk grup memberikan kesenangan tersendiri, kami memiliki paket wisata khusus grup denganberbagai alternatif biaya yang variatif yang bisa anda pilih</p>
                    <p><a href="<?php echo base_url('');?>products/group" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-trainer">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Produk & Jasa Lain Yang Kami Tawarkan</h2>
                <p>Selain Reservasi Hotel, Paket Meeting & Paket Khusus Group Kami Juga menyediakan Layanan Lain Diantaranya :</p>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="services">
                    <span><img class="img-responsive" src="<?php echo base_url();?>assets/images/eo.png" alt=""></span>
                    <h3 class="text-center">Event Organizer</h3>
                    <ol class="text-left">
                        <li>
                            MICE <br>
                            Meeting, Incentives, Conference  and Exibition
                        </li>
                        <li>
                            CROWD EVENT <br>
                            Concer, Fashion Show, Off Air Programs, Launching Product, Brand Awareness
                        </li>
                        <li>
                            TRAVEL AND ECOTOURISM <br>
                            Outbound and camping, Gathering, Adventure Trip, Education Trip
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="services">
                    <span><img class="img-responsive" src="<?php echo base_url();?>assets/images/p&s.svg" alt=""></span>
                    <h3 class="text-center">Product & Supplier</h3>
                    <ol class="text-left">
                        <li>
                            MERCH <br>
                            T-Shirt, Polo Shirt, Tas, Packaging
                        </li>
                        <li>
                            GIMMICK <br>
                            Mug, Tumbler, Payung dll
                        </li>
                        <li>
                            PRESS KIT <br>
                            Map, Sertifikat, Name Tag, Notes, Pulpen, Pin, Goodie Bag
                        </li>
                        <li>
                            WEDDING SOUVENIR
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-pricing" class="fh5co-bg" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Recommended</h2>
                <p>Paket Yang Paling Diminati</p>
            </div>
        </div>
        <div class="row">
            <div class="pricing">

                <?php
                foreach ($paket as $p){
                    $temp = $p->id_paket;
                    $i=1;
                    ?>
                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">
                            <?php echo $p->paket;?>
                            <?php echo $p->destinasi;?>
                        </h2>
                        <div class="">
                            <sup class="currency">Call</sup>
                                <a href="tel://+6281237269829">0812 3726 9829</a>
                                <?php //echo $p->harga?>
                            <small>/For Price & Further Information </small>
                        </div>
                        <ul class="classes">
                            <li class="color">
                            Include : <br>
                            <?php
                            foreach ($fasilitas as $f){
                                if ($temp == $f->id_paket) {
                                    echo $f->fasilitas."<br>";
                                }
                            }
                            ?>
                            Exclude : <br>
                            Pengeluaran Pribadi <br>
                            Oleh-oleh <br>
                            Tip Guide&Driver <br>
                            Makan Diluar Program <br>
                            </li>
                        </ul>
                        <a href="<?php echo base_url('book/#FormBooking')?>" class="btn btn-select-plan btn-sm">Book via this site</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2>Travel Gallery</h2>
                <p>the best moment we have captured.</p>
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
                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(<?php echo base_url('assets/images/img_bg_1.jpg');?>); ">
                        <a href="<?php echo base_url('galeri');?>">
                            <div class="case-studies-summary">
                                <h2>More Picture <i class="icon-arrow-right"></i></h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-testimonial" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Happy Clients</h2>
                <p>Puluhan instansi pemerintah dan swasta telah mempercayakan event mereka kepada kami sebagai orginizer
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/samsung.jpg" alt="Client">
                                </figure>
                                <span>SAMSUNG</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/pertamina.jpg" alt="Client">
                                </figure>
                                <span>PERTAMINA</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/kalbe.png" alt="Client">
                                </figure>
                                <span>KALBE GROUP</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/risetdikti.jpg" alt="Client">
                                </figure>
                                <span>KEMENTRIAN RISETDIKTI</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/perhubungan.png" alt="Client">
                                </figure>
                                <span>KEMENTRIAN PERHUBUNGAN</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/kelautan.png" alt="Client">
                                </figure>
                                <span>KEMENTRIAN KELAUTAN</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/batubara.jpg" alt="Client">
                                </figure>
                                <span>PEMDA BATU BARA MEDAN</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/sleman.png" alt="Client">
                                </figure>
                                <span>PEMDA SLEMAN</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/parepare.png" alt="Client">
                                </figure>
                                <span>DPRD PARE PARE</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/bangka.svg" alt="Client">
                                </figure>
                                <span>BAPPEDA BANGKA BELITUNG</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="<?php echo base_url();?>assets/images/padang.png" alt="Client">
                                </figure>
                                <span>POLDA SUMATERA BARAT</span>
                                <blockquote>
                                    <p></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view("Front/Parts/V_Footer");
?>


