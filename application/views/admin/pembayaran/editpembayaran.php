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
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Form Edit Data Transaksi
                </div>
                <div class="card-body">

                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $transaksi['id_transaksi'];?>">
                <div class="form-group">
                    <label for="tgl_bayar">Tanggal Bayar</label>
                    <input type="text" class="form-control" id="tgl_bayar" name="tgl_bayar" value="<?= $transaksi ['tgl_bayar'] ;?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?= $transaksi['status'] ;?>">
                 </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
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

