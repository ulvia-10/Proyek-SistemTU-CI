    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        
        <div class="sidebar-brand-icon">
         <i class="fas fa-school    "></i>
        </div>
        <div class="sidebar-brand-text mx-3">SITU SMANSA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

    
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Dashboard')?>">
       <i class="fa fa-home fa-3x" aria-hidden="true"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      <!--  Interface  -->
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
       <i class="fa fa-clipboard" aria-hidden="true"></i>
          <span>Data Siswa</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="heading">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('Siswa')?>"> <i class="fas fa-address-book    "></i> Daftar Siswa</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/CetakLaporan')?>"> <i class="fa fa-print" aria-hidden="true"></i> Cetak Laporan</a>
          </div>
        </div>
      </li>
		  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-address-card" aria-hidden="true"></i>
          <span>Absensi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('attendance')?>"> <i class="fas fa-clipboard-list  "></i> Daftar Absensi</a>
            <a class="collapse-item" href="<?php echo base_url('Absensi/CetakLaporan')?>"> <i class="fa fa-print" aria-hidden="true"></i>  Cetak Laporan</a>
            <a class="collapse-item" href="<?php echo base_url('Absensi/CetakFormAbsensi')?>"> <i class="fas fa-clipboard-check "></i> Cetak Form</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
         <i class="fa fa-calculator" aria-hidden="true"></i>
          <span>Pembayaran</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Aksi:</h6>
            <a class="collapse-item" href="<?php echo base_url('Pembayaran')?>"> <i class="fa fa-list" aria-hidden="true"></i> </i> Daftar Pembayaran</a>
            <a class="collapse-item" href="<?php echo base_url('C_bayar/bayar')?>"> <i class="fa fa-history" aria-hidden="true"></i> Riwayat Pembayaran</a>
            <a class="collapse-item" href="<?php echo base_url('Pembayaran/CetakLaporan')?>"> <i class="fa fa-print" aria-hidden="true"></i> Cetak Laporan</a>
     
          </div>
        </div>
      </li>
		

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      <!--  Addons   -->
      </div>


      <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>  

    </ul>
    <!-- End of Sidebar -->
