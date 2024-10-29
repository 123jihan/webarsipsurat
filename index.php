 
<?php 
    include 'layout/head.php' 
?>

<?php 
    include 'layout/sidebar.php' 
?>

<?php 
    include 'layout/navbar.php' 
?>
 
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><b>Dashboard</b></h1>
</div>
<?php
    include 'config/db_koneksi.php';

    $data_srtmsk = mysqli_query($connect,"SELECT * FROM surat_masuk ");

    $total = mysqli_num_rows($data_srtmsk);
?>
 <?php
    include 'config/db_koneksi.php';

    $data_srtkel = mysqli_query($connect,"SELECT * FROM surat_keluar ");

    $total_kel = mysqli_num_rows($data_srtkel);
?>
<?php
    include 'config/db_koneksi.php';

    $data_lem = mysqli_query($connect,"SELECT * FROM lembar_disposisi ");

    $total_lem = mysqli_num_rows($data_lem);
?>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                         Total Surat Masuk </div>
                        <div class="h5 mb-0 font-weight-bold text-grey"><?php echo $total; ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Total Surat Keluar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_kel; ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Total Lembar Disposisi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_lem; ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fa-solid fa-note-sticky"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<?php 
    include 'layout/footer.php' 
?>
