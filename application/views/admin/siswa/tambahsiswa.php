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

<div class="container" style="margin-left: 160px; margin-top: 25px;">
    <div class="row-mt-8">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                <strong style="margin-left: 150px;"> <i class="fa fa-user-plus" aria-hidden="true"></i> Form Tambah Data Siswa</strong>
                </div>
                <div class="cara body p-3">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
                <?php endif ?>
                <form action="" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id_siswa">NISN</label>
                        <input type="text" class="form-control" id="id_siswa" name="id_siswa" required>
                    </div>
                  
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_ortu">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="nama_Ortu" name="nama_ortu">
                    </div>
					<div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Siswa</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
					<div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur"required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
					<div class="form-group">
                        <label for="no_hp">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary float-right"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Input</button>
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
