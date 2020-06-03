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
<div class="container" style=" margin-left: 180px;"> 
    <div class="row-mt-3">
        <div class="col-md-5" style=" margin-left: 50px;">
            <div class="card">
                <div class="card-header" style=" text-align: center;">
                <strong> <i class="fa fa-plus" aria-hidden="true"></i> Form Tambah Absensi </strong>
                </div>
                <div class="cara body p-3">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
                <?php endif ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="tgl_absen">Tanggal Absen </label>
                        <input type="date" class="form-control" id="tgl_absen" name="tgl_absen">
                    </div>
					<div class="form-group">
                        <label for="id_siswa">NISN </label>
                        <input type="number" class="form-control" id="id_siswa" name="id_siswa">
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
                    </div>
                    <button type="submit" name="submit" class="btn btn-warning float-right ml5 mr7">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
        <!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->


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
