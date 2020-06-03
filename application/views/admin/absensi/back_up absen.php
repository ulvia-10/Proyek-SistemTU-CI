<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="page-top">
<style>
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

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
<div style="margin-top: 50px; margin-left: 50px">
<button class="btn" ><i class="fa fa-bars"></i> 10A</button>
<button class="btn" ><i class="fa fa-bars"></i> 10B</button>
<button class="btn" ><i class="fa fa-bars"></i> 10C</button>
<button class="btn" ><i class="fa fa-bars"></i> 10D</button>
<button class="btn" ><i class="fa fa-bars"></i> 11A</button>
<button class="btn"><i class="fa fa-trash"></i> 11B</button>
<button class="btn"><i class="fa fa-close"></i> 11C</button>
<button class="btn"><i class="fa fa-folder"></i> 11D</button>
<button class="btn" ><i class="fa fa-bars"></i> 11E</button>
<button class="btn" ><i class="fa fa-bars"></i> 12A</button>
<button class="btn" ><i class="fa fa-bars"></i> 12B</button>
</div>





<!-- Scroll to Top Button-->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>

<!-- Logout Modal-->
<?php $this->load->view("admin/_partials/modal.php") ?>

<!-- Bootstrap core JavaScript-->
<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>

