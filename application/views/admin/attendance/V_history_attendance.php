<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-clipboard" aria-hidden="true"></i>  Data Absensi </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <a href="<?php echo base_url('attendance/viewAbsensiBaru') ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i>  Tambah Absen Baru</a> 
    <hr>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style=" text-align: center;">
          <tr> 
            <th>No</th>    
            <th>Tanggal</th>    
            <th>Jurusan</th>    
            <th>Pengajar</th> 
            <th>Keterangan</th>    
            <th>Detail</th>
          </tr>
        </thead>
        <tbody style=" text-align: center";>
            <?php $nomor = 1; foreach( $dataAbsen AS $row ) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo date('d F Y', strtotime( $row['tanggal'] )) ?>
                </td>
                <td><?php echo $row['kelas'].' - '. $row['jurusan'] ?></td>
                <td><?php echo $row['nama_pengajar'] ?></td>
                <td>
                    <label for="">A : <strong><?php echo $row['alpha'] ?></strong></label> &emsp;|&emsp;
                    <label for="">I : <strong><?php echo $row['izin'] ?></strong></label> &emsp;|&emsp;
                    <label for="">S : <strong><?php echo $row['sakit'] ?></strong></label>
                </td>
                <td>
                  <a href="<?php echo base_url('attendance/viewDetailAbsensi/'. $row['id_infoabsen']) ?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail</a>
                </td>
            </tr>
            <?php $nomor++; } ?>
        </tbody>
      </table>
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
