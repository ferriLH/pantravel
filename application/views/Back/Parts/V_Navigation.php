
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>AN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PAN</b>Traveleo</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo count($status); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo count($status);?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="data_booking">
                      <i class="fa fa-users text-aqua"></i> <?php echo count($status);?> members on proses today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/admin/dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">  <?php echo $this->session->userdata('user');?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/admin/dist/img/avatar.png" class="img-circle" alt="User Image">

                <p>
                    <?php echo $this->session->userdata('user');?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="center" style="margin-left: 90px;">
                  <a href="<?php echo base_url();?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/admin/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-archive text-yellow"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1)=="paket") {echo "active";}?>"><a href="<?php echo base_url(); ?>admin/data_paket"><i class="fa fa-circle-o text-aqua"></i>Data Paket</a></li>
            <li class="<?php if($this->uri->segment(1)=="galeri") {echo "active";}?>"><a href="<?php echo base_url(); ?>admin/data_galeri"><i class="fa fa-circle-o text-aqua"></i>Data Galeri</a></li>
            <li class="<?php if($this->uri->segment(1)=="booking") {echo "active";}?>"><a href="<?php echo base_url(); ?>admin/data_booking"><i class="fa fa-circle-o text-aqua"></i>Data Booking</a></li>
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
