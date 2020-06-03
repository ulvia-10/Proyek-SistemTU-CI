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
                Detail Pembayaran SPP
            </div>
            <div class="card-body">
                <p class="card-text">
                    <label for=""><b> Nomor Transaksi: </b></label>
                    <?= $transaksi['id_transaksi']; ?></p>
                    <p class="card-text">
                    <label for=""><b> NISN: </b></label>
                    <?= $transaksi['id_siswa']; ?></p>   
                    <p class="card-text">
                    <label for=""><b> Tanggal Bayar: </b></label>
                    <?= $transaksi['tgl_bayar']; ?></p>   
                    <label for=""><b> Status pembayaran: </b></label>
                    <?= $transaksi['status']; ?></p>   

                <a href="<?= base_url();?>Pembayaran" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
</div>
