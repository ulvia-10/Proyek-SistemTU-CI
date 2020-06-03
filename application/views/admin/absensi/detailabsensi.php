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

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Absensi
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong><?= $absensi['id_siswa']; ?></strong></h5>
                <p class="card-text">
                    <label for=""><b> No : </b></label>
                    <?= $absensi['id_absensi']; ?></p>
				<p class="card-text">
                    <label for=""><b> Absen : </b></label>
                    <?= $absensi['absen']; ?></p>
                <p class="card-text">
                    <label for=""><b> Tanggal Absensi : </b></label>
                    <?= $absensi['tgl_absen']; ?></p>
                <a href="<?= base_url();?>absensi" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
