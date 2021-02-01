<!-- Begin Page Content -->
<div class="container-fluid">

	<br>
	<!-- Page Heading -->



	<div class="row">

		<div class="col-md-12">
			<h3>Detail Absensi</h3>
			<p>Merekap data absensi siswa baru</p>
		</div>


		<div class="col-md-10 offset-1">

			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-info-circle" aria-hidden="true"></i>
						Detail Rincian Absen </h6>
				</div>
				<div class="card-body">

					<div class="row">
						<div class="col-md-6">
							<h6>Nama Pengajar :</h6>
							<h3><?php echo $hasilDetail[0][0]['pengajar'] ?></h3>
						</div>
						<div class="col-md-6">
							<?php //echo date('Y-m-d') 2020-06-03
                         //echo "U ".date('d F Y'); // ulvia
                        //  echo "<br>";
                        //  echo "T ".date('Y F d'); // tutik
                            // 03 Juni 2020

                            // d = 03
                            // m = 06
                            // M = Jun, Jan
                            // F = Juni, January
                            // a = am pm
                            // A = AM PM 
                            // l = Wednesday
                            // H = 23 
                            // s = 0 - 59
                            // i = 07
                            // Y = 2020
                            
                        ?>
							<div><label for="">Tanggal Rekapan : </label>
								<span><b><?php echo date('d F Y', strtotime($hasilDetail[0][0]['tanggal']) ); ?></b></span>
							</div>
							<?php

                            // konversi kelas 
                            $kelas = "";
                            if ( $hasilDetail[0][0]['kelas'] == 10 ) {

                                $kelas = "X";
                            } else if ( $hasilDetail[0][0]['kelas'] == 11 ) {

                                $kelas = "XI";
                            } else if ( $hasilDetail[0][0]['kelas'] == 12 ) {

                                $kelas = "XII";
                            }
                        ?>
							<div><label for="">Kelas : </label> <span><b><?php echo $kelas ?> -
										<?php echo $hasilDetail[0][0]['jurusan'] ?></b></span></div>

						</div>
					</div>
					<hr>

					<?php if ( count($hasilDetail[1]) > 0 ) { ?>

					<table class="table table-stripe" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
								<th>NISN</th>
								<th>Nama Siswa</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>

							<?php $nomor = 1; foreach( $hasilDetail[1] AS $rowDetail ) { ?>
							<tr>
								<td><?php echo $nomor ?></td>
								<td><?php echo $rowDetail['id_siswa'] ?></td>
								<td><?php echo $rowDetail['nama'] ?></td>

								<?php

                                    $keterangan = "";
                                    $warna = "";

                                    if ( $rowDetail['keterangan'] == "A" ) {

                                        $keterangan = "Alpha";
                                        $warna      = "success";
                                    } else if ( $rowDetail['keterangan'] == "I" ) {

                                        $keterangan = "Izin";
                                        $warna = "info";

                                    } else if ( $rowDetail['keterangan'] == "S" ) {

                                        $keterangan = "Sakit";
                                        $warna   = "danger";
                                    }

                                ?>
								<td>
									<label for="" class="badge badge-<?php echo $warna ?>">Kehadiran :
										<?php echo $keterangan ?></label>
								</td>
							</tr>
							<?php $nomor++;} ?>

						</tbody>
					</table>
					<?php } else { ?>

					<div class="text-center">
						<img src="<?php echo base_url('assets/images/undraw_accept_request_vdsd.png') ?>"
							alt="Illustrator" width="400">
						<h4>Nihil !</h4>
						<p>Siswa pada kelas <?php echo $kelas ?> - <?php echo $hasilDetail[0][0]['jurusan'] ?> hadir
							semua.</p>
					</div>

					<?php } ?>
				</div>
			</div>

		</div>

	</div>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure to logout?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" to leave the page!</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url('Login'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>
