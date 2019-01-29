
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <p class="num fh5co-social"> Phone : 0812 3726 9829  </p>
                        <p class="num fh5co-social"> Phone : 0812 3672 1588  </p>
                        <p class="num fh5co-social"> Email	: hanz@pantravelholiday.com </p>
                        <p class="num fh5co-social"> Email	: office@pantravelholiday.com </p>

                        <!--                        <ul class="fh5co-social">-->
<!--                            <li><a href="#"><i class="icon-twitter"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-dribbble"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-github"></i></a></li>-->
<!--                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="<?php echo base_url();?>">Pantravelholiday<span>.</span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="<?php if($this->uri->segment(1)=="") {echo "active";}?>">
                                <a href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li class="has-dropdown <?php if($this->uri->segment(1)=="products") {echo "active";}?>">
                                <a href="#">Our Products</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="<?php echo base_url();?>#fh5co-trainer">Event Organizer</a>
                                    </li>
                                    <li class="<?php if($this->uri->segment(2)=="group") {echo "active";}?>">
                                        <a href="<?php echo base_url('');?>products/group">Paket Khusus Grup</a>
                                    </li>
                                    <li class="<?php if($this->uri->segment(2)=="meeting") {echo "active";}?>">
                                        <a href="<?php echo base_url('');?>products/meeting">Paket Meeting</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>#fh5co-trainer">Product & Supplier</a>
                                    </li>
                                    <li class="<?php if($this->uri->segment(2)=="reservasi") {echo "active";}?>">
                                        <a href="<?php echo base_url('');?>products/reservasi">Reservasi Hotel</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?php if($this->uri->segment(1)=="book") {echo "active";}?>">
                                <a href="<?php echo base_url('');?>book">Booking Paket Wisata</a>
                            </li>
                            <li class="<?php if($this->uri->segment(1)=="about") {echo "active";}?>">
                                <a href="<?php echo base_url('');?>about">About Us</a>
                            </li>
                            <li class="<?php if($this->uri->segment(1)=="galeri") {echo "active";}?>">
                                <a href="<?php echo base_url('');?>galeri">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
