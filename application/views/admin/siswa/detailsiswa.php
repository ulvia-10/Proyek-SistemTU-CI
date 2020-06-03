<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

<div class="container" style="margin-left: 200px;">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
            <i class="fa fa-user" aria-hidden="true"></i>  Detail Data Siswa 
            </div>   
            <div class="card-body">
                <center><h5 class="card-title"><strong><?= $siswa['nama']; ?></strong></h5></center>
                <img height="150px;" width="150px;"  style=" margin-left: 150px;" src="<?=base_url();?>./images/<?=$siswa['foto'];?>">
                <p class="card-text">
                    <label for=""><b> NISN : </b></label>
                    <?= $siswa['id_siswa']; ?></p>
				<p class="card-number">
                    <label for=""><b> Umur : </b></label>
                    <?= $siswa['umur']; ?></p>
                <p class="card-text">
                    <label for=""><b> Alamat Siswa : </b></label>
                    <?= $siswa['alamat']; ?></p>    
                <p class="card-text">
                    <label for=""><b> Gender : </b></label>
                    <?= $siswa['gender']; ?></p>
                <p class="card-text">
                    <label for=""><b> Tanggal Lahir : </b></label>
                    <?= $siswa['tgl_lahir']; ?></p>
                <p class="card-text">
                    <label for=""><b> Jurusan : </b></label>
                    <?= $siswa['jurusan']; ?></p>
				<p class="card-text">
                    <label for=""><b> Agama : </b></label>
                    <?= $siswa['agama']; ?></p>
				<p class="card-text">
                    <label for=""><b> Nama Orang Tua : </b></label>
                    <?= $siswa['nama_ortu']; ?></p>	
				<p class="card-text">
                    <label for="no_hp"><b> Nomor Telepon : </b></label>
                    <?= $siswa['no_hp']; ?></p>
                 <p class="card-text">
                    <label for="kelas"><b> Kelas : </b></label>
                    <?= $siswa['kelas']; ?></p>	
                
                <a href="<?= base_url();?>Siswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
