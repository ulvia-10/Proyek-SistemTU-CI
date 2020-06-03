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
                    <h1 class="h4 text-gray-900 mb-3">Create An Account </h1>
                  </div>
                    <div class="card-body">
                    <form class="user" method="post" action="<?= base_url('registration/register'); ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="username" name="username"
									placeholder="Username" value="<?= set_value('username') ?>">
								<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 mb-3 mx-auto">
									<input type="password" class="form-control form-control-user" id="password" name="password"
										placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<button type="submit" class="btn btn-success btn-user btn-block">
								Register Account
							</button>
						</form>
						<hr>
            <div class="text-center">
							<a class="small" href="<?= base_url('Login'); ?>">Already have an account? Login!</a>
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
