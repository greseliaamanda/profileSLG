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

    <title>RSUD SLG - Tambah Pengumuman</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Pengumuman</h1>
                            </div>
                            
                            <form action="action.php" method="POST" class="user" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="judul" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Judul">
                                </div>
                                <div class="form-group">
									<textarea class="form-control input-sm" name="isi" id="kontent" rows="15"></textarea>
								</div>
                                <div class="form-group">
                                    <input type="datetime-local" name="tgl" class="form-control form-control-gambar" id="exampleInputEmail"
                                        placeholder="Tanggal">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="gambar" class="form-control form-control-gambar" id="exampleInputEmail"
                                        placeholder="Gambar">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="addPengumuman" value="Submit">
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

<script src="tinymce/tinymce.min.js"></script>

<script type="text/javascript">

tinymce.init({

    selector: "textarea",

    plugins: [

        "advlist autolink lists link image charmap print preview anchor",

        "searchreplace visualblocks code fullscreen",

        "insertdatetime media table contextmenu paste"

    ],

toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

});

</script>

</html>

<?php
} else{
    echo "<script>alert('Anda Harus Login Dahulu!');</script>";
    header('location:login.php');
}
?>