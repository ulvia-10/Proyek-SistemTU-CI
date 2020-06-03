<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->

<div class="row">

    <div class="col-md-12">
        <h3>Rekap Absen Baru</h3>
        <p>Merekap data absensi siswa baru</p>
    </div>
    <div class="col-md-4">


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-info-circle" aria-hidden="true"></i>  Informasi Absensi </h6>
            </div>
            <div class="card-body">
                <form action="" method="GET">
                    <div class="form-group">
                    <?php @$dataForm = $this->input->get('tanggal'); ?>
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo ($dataForm) ? date('Y-m-d', strtotime($dataForm)) : date('Y-m-d') ?>" />
                        <small>Pilih tanggal absensi</small>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pengajar</label>
                        <input type="text" name="leading" class="form-control" value="<?php echo ($dataForm) ? $this->input->get('leading') : '' ?>" />
                        <small>Pilih nama pengajar</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pilih Kelas</label>
                                <select name="kelas" id="" class="form-control">
                                    <option value="10" <?php echo (@$this->input->get('kelas') == "10") ? 'selected' : '' ?>>X</option>
                                    <option value="11" <?php echo (@$this->input->get('kelas') == "11") ? 'selected' : '' ?>>XI</option>
                                    <option value="12" <?php echo (@$this->input->get('kelas') == "12") ? 'selected' : '' ?>>XII</option>
                                </select>
                                <small>Pilih kelas </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pilih Jurusan</label>
                                <select name="jurusan" id="" class="form-control">
                                    <option value="IPA" <?php echo (@$this->input->get('jurusan') == "IPA") ? 'selected' : '' ?>>IPA</option>
                                    <option value="IPS" <?php echo (@$this->input->get('jurusan') == "IPS") ? 'selected' : '' ?>>IPS</option>
                                   
                                </select>
                                <small>Pilih jurusan</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-warning btn-sm">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    
    <!-- List siswa -->
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-clipboard-check    "></i> Data Absensi </h6>
            </div>
            <div class="card-body">

                <?php if ( $statusList ) { ?>
                <div class="table-responsive"> 
                    <form action="<?php echo base_url('attendance/actInsert') ?>" method="POST">

                        <input type="hidden" name="tanggal" value="<?php echo @$this->input->get('tanggal') ?>">
                        <input type="hidden" name="leading" value="<?php echo @$this->input->get('leading') ?>">
                        <input type="hidden" name="kelas" value="<?php echo @$this->input->get('kelas') ?>">
                        <input type="hidden" name="jurusan" value="<?php echo @$this->input->get('jurusan') ?>">
                        
                        <button class="btn btn-success btn-sm"> Simpan Absensi</button><br>
                        <small>Setelah memastikan proses absen klik simpan</small>
                        <hr>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">NISN</th>
                                    <th rowspan="2">Nama Siswa</th>
                                    <th colspan="3">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>A</th>
                                    <th>I</th>
                                    <th>S</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $nomor = 1; foreach ( $listSiswa->result_array() as $row ) { ?>
                                    <tr>
                                        <td><?php echo $nomor ?></td>
                                        <td><?php echo $row['id_siswa'] ?> <input type="hidden" name="id_siswa-<?php echo $row['id_siswa'] ?>" value="<?php echo $row['id_siswa'] ?>"></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td>
                                            <input type="radio" name="keterangan-<?php echo $row['id_siswa'] ?>" id="Alpha-<?php echo $row['id_siswa'] ?>" value="A">
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan-<?php echo $row['id_siswa'] ?>" id="Izin-<?php echo $row['id_siswa'] ?>" value="I">
                                        </td>
                                        <td>
                                            <input type="radio" name="keterangan-<?php echo $row['id_siswa'] ?>" id="Sakit-<?php echo $row['id_siswa'] ?>" value="S">
                                        </td>
                                    </tr>
                                <?php $nomor++;} ?>
                            </tbody>
                        </table>
                    </form>
                </div>
                <?php } else { ?>
                    <h4>Pemberitahuan !</h4>
                    <p>isikan informasi absensi pada menu kiri disamping</p>
                <?php } ?>
            </div>
        </div>
    </div>

</div>

<!-- DataTales Example -->


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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
