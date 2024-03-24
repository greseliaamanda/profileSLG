<?php
session_start();

include 'layout/koneksi.php';


if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
    
    $id_ralan = $_GET['id_ralan'];
    $q_tampil_ralan = mysqli_query($db, "SELECT * FROM ralan WHERE id_ralan = '$id_ralan'");
    $r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSUD SLG - Tambah Data Ralan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'layout/aside.php';?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-5">
                    <div class="col-lg-12">
                        <div class="p-2">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Rawat Jalan</h1>
                            </div>
                            
                            <form action="action.php" method="POST" class="user">
                                <div class="form-group">
                                    <input type="hidden" name="id_ralan" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['id_ralan'];?>">
                                </div>
                                <td>Nama Poli</td>
                                <div class="form-group">
                                    <input type="text" name="nm_poli" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?= $r_tampil_ralan['nm_poli']?>">
                                </div>
                                <td>Nama Dokter</td>
                                <div class="form-group">
                                    <input type="text" name="nm_dokter" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['nm_dokter'];?>">
                                </div>
                                <td>Hari 1</td>
                                <div class="form-group">
                                    <input type="text" name="hari" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['hari'];?>">
                                </div>
                                <td>Jam 1</td>
                                <div class="form-group">
                                    <input type="text" name="jam" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['jam'];?>">
                                </div>
                                <td>Hari 2</td>
                                <div class="form-group">
                                    <input type="text" name="hari2" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['hari2'];?>">
                                </div>
                                <td>Jam 2</td>
                                <div class="form-group">
                                    <input type="text" name="jam2" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_ralan['jam2'];?>">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="editRalan" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
} else{
    echo "<script>alert('Anda Harus Login Dahulu!');</script>";
    header('location:login.php');
}
?>