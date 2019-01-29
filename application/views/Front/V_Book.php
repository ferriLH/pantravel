<?php
$this->load->view("Front/Parts/V_Header");
$this->load->view("Front/Parts/V_Navigation");
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url();?>assets/images/book.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Booking</h1>
                        <h2>Isi <a href="#FormBooking" >Form dibawah</a> untuk booking </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--<div id="map" class="fh5co-map"></div>-->


<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1 animate-box">

                <div class="fh5co-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <li class="address">Jln. Bendungan Hilir Raya No. 79 <br>Jakarta Pusat</li>
                        <li class="phone"><a href="tel://+6281237269829">Phone : 0812 3726 9829</a></li>
                        <li class="phone"><a href="https://api.whatsapp.com/send?phone=6281237269829&text=Halo%20Pak%20Hamzah%20Bisakah%20Saya%20Mendapatkan%20Info%20Lebih%20Lanjut%20Tentang%20Harga%20Paket?" target="_blank">Whatsapp</a></li>
                        <li class="phone"><a href="tel://+6281236721588">Phone : 0812 3672 1588</a></li>
                        <li class="phone"><a href="tel://+6282245677577">Fax :(021) 5738105 </a></li>
                        <li class="email"><a href="mailto:office@pantravelholiday.com">office@pantravelholiday.com</a></li>
                        <li class="email"><a href="mailto:office@pantravelholiday.com">hanz@pantravelholiday.com</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 animate-box">
                <h3>Get In Touch</h3>
                <form id="FormBooking" action="<?php echo base_url();?>booking/auth" method="post">
                    <?php
                    if ($this->session->flashdata('success')) {
                        ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Notice</strong>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } ?>
                    <?php
                    if ($this->session->flashdata('failed')) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Notice</strong>
                            <?php echo $this->session->flashdata('failed'); ?>
                        </div>
                    <?php } ?>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" required id="fname" name="fname" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" required id="lname" name="lname" class="form-control" placeholder="Nama Belakang">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" required name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="noKTP">No Ktp</label> -->
                            <input type="number" required name="noKTP" onKeyPress="if(this.value.length==16) return false;" id="noKTP" class="form-control" placeholder="Nomor KTP">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="noHP">No HP</label> -->
                            <input type="number" required name="noHP" onKeyPress="if(this.value.length==13) return false;" id="noHP" class="form-control" placeholder="Nomor Handphone">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="paket">paket</label> -->
                            <select required name="paket" id="paket" class="form-control">
                                <option value="0" label="- Pilih Paket -"></option>
                                <?php
                                foreach($paket as $p){
                                    ?>
                                    <option value="<?php echo $p->id_paket; ?>" label="<?php echo $p->paket." "; echo $p->destinasi;?>"></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="tglBerangkat">Tanggal Berangkat</label>
                            <input type="date" required name="tglBerangkat" id="tglBerangkat" class="form-control" placeholder="Tanggal Berangkat">
                        </div>
                        <div class="col-md-4">
                            <label for="jml">Jumlah Peserta</label>
                            <input type="number" id="jml" min="1" required name="jml" class="form-control" placeholder="Jumlah Peserta">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="alamat" id="alamat" required cols="30" rows="10" class="form-control" placeholder="Alamat lengkap"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<?php
$this->load->view("Front/Parts/V_Footer");
?>
