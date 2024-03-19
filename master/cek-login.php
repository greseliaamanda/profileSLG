<?php
session_start();
$_SESSION['sesi'] = NULL;

include "layout/koneksi.php";
    if ( isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $qry = mysqli_query($db, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
        $sesi = mysqli_num_rows($qry);

        if ($sesi == true)
        {
            $data_user = mysqli_fetch_array($qry);
            $_SESSION['id_user'] = $data_user['id_user'];
            $_SESSION['sesi'] = $data_user['nama'];

            echo "<script>alert('Anda berhasil Log In');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?user=$data_user[id_user]'>";      
        }
        else
        {
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            echo "<script>alert('Anda gagal Log In');</script>";
        }
    }
    else
    {
        include "login.php";
    }
?>