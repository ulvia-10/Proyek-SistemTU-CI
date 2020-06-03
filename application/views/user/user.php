<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<center><h1 class="h3 mb-2 text-gray-800"> SMAN 1 SMANSA </h1>
<p class="mb-4">Jl. A Yani Blitar 66191, Indonesia. Telepon : 0342-456789</p></center>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa SMAN 1 Kesamben </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr> 
          <th>No</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Detail</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach ($siswa as $kpw){?>
            <tr>
                <td> <?= $no++; ?></td>
                <td> <?= $kpw->id_siswa; ?></td>
                <td> <?= $kpw->nama; ?></td>
                <td> <?= $kpw->jurusan; ?></td>
                <td> <?= $kpw->kelas; ?></td>
                <td>
                    <a href="<?= base_url().'user/detail'.$kpw->id_siswa?>" class="btn btn-info" style="margin-left: 35%">
                        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
                        Detail
                    </a>
                </td>
            </tr> 
            <?php } ?>
        </tbody>
      </table>
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
