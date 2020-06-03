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
	<?php ?>

<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Edit Absensi Siswa
                </div>
                <div class="card-body">

                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $absensi['id_siswa'];?>">
                <div class="form-group">
                    <label for="id_siswa">NISN</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $absensi['id_siswa'] ;?>">
                 </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Absensi</label>
                    <input type="date" class="form-control" id="tgl_absen" name="tgl_absen" value="<?= $absensi ['tgl_absen'] ;?>">
                </div>
				 <div class="form-group">
                        <label for="hadir">Hadir</label>
                        <input type="number" class="form-control" id="hadir" name="hadir"required>
                    </div>
					<div class="form-group">
                        <label for="izin">Izin</label>
                        <input type="number" class="form-control" id="izin" name="izin"required>
                    </div>
					<div class="form-group">
                        <label for="sakit">Sakit</label>
                        <input type="number" class="form-control" id="sakit" name="sakit"required>
                    </div>
				<button type="submit" name="edit" class="btn btn-primary float-right"> <i class="fas fa-edit    "></i> Edit</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Footer -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div> 
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>