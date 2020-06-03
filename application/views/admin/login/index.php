<?=
form_open('Login/proses_login');
?>
<body>
<style>
body{
	margin:0;
	padding:0;
	background: url('img/smansa.jpg');
	background-size:cover
}
</style>
</body>
  <div class="container"><br><br><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-4" style=" height: 40px;opacity: 96%;">

        <div class="card o-hidden border-0 shadow-lg my-4s">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5" >
                  <div class="text-center">
                  <img src="img/logo.jpg" style="width: 100px; height: 100px; margin-left: 1%; margin-top:-30px;"><br>
                    <h1 class="h4 text-gray-900 mb-3">LOGIN PAGE </h1>
                  </div>
                    <div class="card-body">
                        <form class="user" method="post" action="<?= base_url('Login/index'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="uname1" placeholder=" Username" required>
              
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="pwd1" placeholder="Password" required>
                    </div>
                  </form>
                  </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('registration'); ?>">Don't have accout? Register Now!</a>
                    </div>
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
 
<!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

<?=
form_close();
?>
