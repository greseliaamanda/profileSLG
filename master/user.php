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

    <title>RSUD SLG - User</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'layout/aside.php'?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'layout/navbar.php'?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data User</h6> -->
                            <a href="add-user.php?user=<?php echo $_SESSION['id_user']; ?>" class="tambah d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $nomor = 1;
                                            $query = "SELECT * FROM user";
                                            $q_tampil_user = mysqli_query($db, $query);

                                            if (mysqli_num_rows($q_tampil_user) > 0) {
                                                while ($r_tampil_user = mysqli_fetch_array($q_tampil_user)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo $r_tampil_user['nama']; ?></td>
                                                        <td><?php echo $r_tampil_user['jabatan']; ?></td>
                                                        <td><?php echo $r_tampil_user['username']; ?></td>
                                                        <td><?php echo $r_tampil_user['password']; ?></td>
                                                        <td>
                                                            <a href="edit-user.php?edit-user&id_user=<?php echo $r_tampil_user['id_user']; ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                                            <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="action.php?act=deletedUser&id_user=<?= $r_tampil_user['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" 
                                                            style="color:white">Hapus</a></button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $nomor++;
                                                }
                                            } else {
                                                echo "";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'layout/footer.php'?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<?php
} else{
    echo "<script>alert('Anda Harus Login Dahulu!');</script>";
    header('location:login.php');
}
?>