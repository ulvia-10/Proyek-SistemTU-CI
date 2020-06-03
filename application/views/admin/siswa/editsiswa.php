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

<div class="container" style=" margin-left: 200px; margin-top: 50px;">
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                 <i class="fas fa-edit    "></i> Form Edit Data Siswa
                </div>
                <div class="card-body">
                
                <form action="" method="post">
                
                <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'];?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ;?>">
                 </div>
                 <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa ['alamat'] ;?>">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control" id="umur" name="umur" value="<?= $siswa ['umur'] ;?>">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $siswa ['agama'] ;?>">
                </div>
                <div class="form-group">
                    <label for="nama">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="<?= $siswa ['gender'] ;?>">
                </div>
                <div class="form-group">
                    <label for="nama_ortu">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="<?= $siswa ['nama_ortu'] ;?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $siswa ['jurusan'] ;?>">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa ['kelas'] ;?>">
                </div>
                <div class="form-group">
                    <label for="no_hp">NO HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $siswa ['no_hp'] ;?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa ['tgl_lahir'] ;?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right"> <i class="fas fa-edit    "></i> Edit</button>
            </form>
        </div>
    </div>
</div>
</div>


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

