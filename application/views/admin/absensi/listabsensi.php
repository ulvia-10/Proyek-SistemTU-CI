<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-user" aria-hidden="true"></i> Data Siswa SMAN 1 Kesamben </h6>
    <div class="row mt-4">
        <div class="col-md-6">
            <!-- <a href ="<?=base_url();?>Siswa/tambah/" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a> -->
        </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style=" text-align: center;">
          <tr> 
          <th scope="col">No </th>
                <th scope="col">Kode Kelas</th>
                <th scope="col">Kelas </th>
                <th scope="col">Absen</th>
                <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
        <?php $no=1;
                foreach ($absensi as $kpw){?> 
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $kpw['kode_kelas'];?></td>
                <td><?= $kpw['kelas']; ?></td>
                <td><?= $kpw['absen']; ?></td>
                <td><a href="<?= base_url();?>Absensi/detail2/<?= $kpw['id_absensi'];?>"
                class="badge badge-primary float-center"> <i class="fa fa-plus" aria-hidden="true"></i> Absen</a></td>
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
