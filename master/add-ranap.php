<?php
session_start();

include 'layout/koneksi.php';

if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSUD SLG - Add Ranap</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Rawat Inap</h1>
                            </div>
                            <form action="action.php" method="POST" class="user">
                                <div class="form-group">
                                    <input type="nama" name="nama" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama User">
                                </div>
                                <div class="form-group">
                                    <input type="jabatan" name="jabatan" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                    <input type="username" name="username" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="addUser" value="Submit">
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