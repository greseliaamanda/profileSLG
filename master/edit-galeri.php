<?php
session_start();

include 'layout/koneksi.php';


if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
    
    $id_galeri = $_GET['id_galeri'];
    $q_tampil_galeri = mysqli_query($db, "SELECT * FROM galeri WHERE id_galeri = '$id_galeri'");
    $r_tampil_galeri = mysqli_fetch_array($q_tampil_galeri);

    if (empty($r_tampil_galeri['gambar']) or ($r_tampil_galeri['gambar'] == '-')) {
        $foto = "admin-no-photo.jpg";
    } else {
        $foto = $r_tampil_galeri['gambar'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSUD SLG - Tambah Data Galeri</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Galeri</h1>
                            </div>
                            
                            <form action="action.php" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id_galeri" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?php echo $r_tampil_galeri['id_galeri'];?>">
                                </div>
                                <td>Deskripsi</td>
                                <div class="form-group">
                                    <input type="text" name="deskripsi" class="form-control form-control-user" id="exampleInputEmail"
                                        value="<?= $r_tampil_galeri['deskripsi']?>">
                                </div>
                                <td>Gambar</td>
                                <div class="form-group">
                                <img src="img/<?php echo $foto; ?>" width="70px" height="75px">
                                    <input type="file" name="gambar" class="isian-formulir isian-formulir-border">
                                    <input type="hidden" name="foto_awal" value="<?php echo $r_tampil_galeri['gambar'];?>">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="editGaleri" value="Submit">
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