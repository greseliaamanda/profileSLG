<?php
    include 'layout/koneksi.php';

    // $id_user = $_GET['id_user'];
    $act = $_GET['act'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Tambah admin
    if(isset($_POST['addUser'])){
        extract($_POST);

        $sql = "INSERT INTO user VALUES('$id_user', '$nama', '$jabatan', '$username', '$password')";
        $query = mysqli_query($db, $sql);
        echo "<meta http-equiv='refresh' content='0; url=user.php?user=$data_user[id_user]'>";
        
    // Edit User
    }else if(isset($_POST['editUser'])){
        extract($_POST);

        mysqli_query($db, "UPDATE user
                            SET id_user='$id_user', nama='$nama', jabatan='$jabatan', username='$username', password='$password'
                            WHERE id_user = '$id_user'");
        echo "<meta http-equiv='refresh' content='0; url=user.php?user=$data_user[id_user]'>";

    // Hapus User
    }else if($act == 'deletedUser'){

        mysqli_query($db, "DELETE FROM user WHERE id_user = '$_GET[id_user]'");
        echo "<meta http-equiv='refresh' content='0; url=user.php?user=$data_user[id_user]'>";
    
    // Tambah Fasilitas
    }
?>