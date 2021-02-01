<!-- Begin Page Content -->
<div class="container-fluid">
<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-laptop" aria-hidden="true"></i>  Data Transaksi </h6>
    
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style=" text-align: center;">
          <tr> 
          <th>No</th>
                <th>No Transaksi</th>
                <th>Tanggal Bayar</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Action</th>
          </tr>
        </thead>
        <tbody style=" text-align:center;">
        <?php $no=1; foreach ($transaksi as $kpw){?> 
                <tr>
                <td> <?= $no++; ?></td>
                <td><?= $kpw["id_transaksi"];?></td>
                <td><?= $kpw["tgl_bayar"];?></td>
                <td><?= $kpw["id_siswa"]?></td>
                <td><?= $kpw["nama"];?></td>
                <!-- <td><a href="<?= base_url();?>Pembayaran/tambah/<?= $kpw['id_transaksi'];?>"
                class="badge badge-primary float-right " > <i class="fa fa-plus" aria-hidden="true"></i></a></td> -->
                <td><a href="<?= base_url();?>Pembayaran/detail/<?= $kpw['id_transaksi'];?>"
                class="badge badge-danger  " style="margin-left: -2px; text-align: center;"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="<?= base_url();?>Pembayaran/edit/<?= $kpw['id_transaksi'];?>"
                class="badge badge-success " style=" text-align: center;" > <i class="fas fa-edit "></i></a></td>
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
