<?php
session_start();

include 'layout/koneksi.php';


if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
    
    $id_berita = $_GET['id_berita'];
    $q_tampil_berita = mysqli_query($db, "SELECT * FROM berita WHERE id_berita = '$id_berita'");
    $r_tampil_berita = mysqli_fetch_array($q_tampil_berita);

    if (empty($r_tampil_berita['gambar']) or ($r_tampil_berita['gambar'] == '-')) {
        $foto = "admin-no-photo.jpg";
    } else {
        $foto = $r_tampil_berita['gambar'];
    }

    $query = "SELECT * FROM user";
    $hasil = mysqli_query($db, $query);
    mysqli_connect_error();
    // ... menampung semua data user
    $data_user = array();

    // ... tiap baris dari hasil query dikumpulkan ke $data_user
    while ($row = mysqli_fetch_assoc($hasil)) {
        $data_user[] = $row;
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

    <title>RSUD SLG - Edit Berita</title>

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
                    <div class="col-lg-10">
                        <div class="p-2">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Berita</h1>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="hidden" name="id_berita" class="form-control form-control-user" id="exampleInputEmail"
                                            value="<?php echo $r_tampil_berita['id_berita'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control form-control-user" id="exampleInputEmail"
                                            value="<?php echo $r_tampil_berita['judul'];?>">
                                    </div>
                                    <div class="form-group">
										<textarea class="form-control input-sm" name="kontent" id="editor" rows="15"><?php echo $r_tampil_berita['kontent']; ?></textarea>
									</div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="datetime-local" name="tgl_posting" class="form-control form-control-user" id="exampleInputEmail"
                                            value="<?= $r_tampil_berita['tgl_posting']?>">
                                    </div>
                                    <div class="form-group">
                                    <img src="img/<?php echo $foto; ?>" width="70px" height="75px">
                                        <input type="file" name="gambar" class="isian-formulir isian-formulir-border">
                                        <input type="hidden" name="foto_awal" value="<?php echo $r_tampil_berita['gambar'];?>">
                                    </div>
                                    <div class="form-group">
                                    <label>Penulis</label>
                                    <select class="form-control input-sm" name="penulis" >
                                    <?php foreach ($data_user as $user) : ?>
								        <option value="<?php echo $user['nama'] ?>" <?php echo ($user['nama'] == $r_tampil_berita['penulis']) ? 'selected' : ''; ?>> <?php echo $user['nama']?></option>
							        <?php endforeach ?>
                                    </select>
								    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="editBerita" value="Submit">
                            </form>
                            </div>
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