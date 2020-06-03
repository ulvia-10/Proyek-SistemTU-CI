<html lang="en">
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<!-- <style>
    .cards{
        width: 30px;
        height: 30px;
        background-color: black;
        margin-left: 20px;
    }
</style> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    
    

    <div id="content" style="background-color: lightblue; opacity: 80%;">
    <h3 style=" color: black; margin-top: 30px; margin-left: 50px; font-size: 35px;"> Dashboard</h3>
     <h3 style="text-align: center; margin-top: 40px; color: black;">Selamat Datang Admin! <i class="fa fa-user" aria-hidden="true"></i> </h3> <BR>
     <div class="kotak-jumlah" style="width:200px; height: 150px; background-color:#22313f; border-radius:5%; margin: 65px; margin-left:120px; display: inline-block;opacity:80%;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI; margin-top: 15px;"> Absensi <b><?php echo $getAbsensi ?></b></h2>
            <p style="color: grey; margin-left:20px;">
               <i class="fa fa-address-book fa-3x alt" aria-hidden="true"></i>
            </p>
    <div class="kotak-jumlah2" style="width:200px; height: 150px; background-color:blue; border-radius:5%; margin: 65px; margin-left:300px; margin-top: -125px; display: inline-block;opacity:80%;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI; margin-top: 15px;"> Siswa <b><?php echo $getSiswa ?></b></h2><br>
            <p style="color: grey; margin-left:20px;"> 
                <i class="fas fa-user  fa-3x "></i>
            </p> 
     <div class="kotak-jumlah3" style="width:200px; height: 150px; background-color:blue; border-radius:5%; margin: 65px; margin-left:300px; margin-top: -150px; display: inline-block;opacity:80%;">
            <h2 style= "text-align:center; color:lightgrey; font-family:segoe UI; margin-top: 15px;"> Transaksi <b><?php echo $getTransaksi ?></b></h2><br>
            <p style="color: grey; margin-left:20px;">
                <i class="fas fa-cart-plus fa-3x   "></i>
            </p> 
     
     </div>

        
<!-- Scroll to Top Button-->
<?php $this->load->view("admin/_partials/scrolltop.php") ?>

<!-- Logout Modal-->
<?php $this->load->view("admin/_partials/modal.php") ?>

<!-- Bootstrap core JavaScript-->
<?php $this->load->view("admin/_partials/js.php") ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>