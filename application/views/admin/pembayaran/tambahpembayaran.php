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
									<strong style="margin-left: 150px;"> <i class="fa fa-user-plus" aria-hidden="true"></i> Form Tambah
										Data Pembayaran</strong>
								</div>
								<div class="cara body p-3">
									<?php if (validation_errors()):?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors();?>
									</div>
									<?php endif ?>
									<form action="<?php echo site_url('Pembayaran/tambahBayar')?>" method="post">
										<div class="form-group">
											<label for="id_transaksi">Nomor Transaksi</label>
											<input type="text" class="form-control" name="id_transaksi">
										</div>
										<div class="form-group">
											<label for="qty_spp">Qty SPP</label>
											<input type="number" class="form-control" name="qty_spp">
										</div>
										<div class="form-group">
											<label for="harga_spp">Harga SPP</label>
											<input type="text" class="form-control" name="harga_spp">
										</div>

										<button type="submit" name="submit" class="btn btn-primary float-right"> <i
												class="fa fa-plus-circle" aria-hidden="true"></i> Input</button>
								</div>
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
