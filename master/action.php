<?php
    include 'layout/koneksi.php';

    // $id_user = $_GET['id_user'];
    $act = $_GET['act'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_ralan = null;
    $nm_poli = $_POST['nm_poli'];
    $nm_dokter = $_POST['nm_dokter'];
    $hari = $_POST['hari'];
    $hari2 = $_POST['hari2'];
    $jam = $_POST['jam'];
    $jam2 =$_POST['jam2'];
    //Ranap
    $id_ruang = $_POST['id_ruang'];
    $nm_ruang = $_POST['nm_ruang'];
    $kelas = $_POST['kelas'];
    $jml_ruang = $_POST['jml_ruang'];   
    $gambar = $_POST['gambar'];   
    // Fasilitas
    $id_fasilitas = $_POST['id_fasilitas'];
    $nm_fasilitas = $_POST['nm_fasilitas'];
    $des_fasilitas = $_POST['deskripsi'];
    //Galeri
    $id_galeri = $_POST['id_galeri'];
    $nm_galeri = $_POST['nm_galeri'];
    $deskripsi = $_POST['deskripsi'];
    //Pengumuman
    $id_peng = $_POST['id_peng'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tgl = date('Y-m-d H:i:s');
    //berita
    $id_berita = $_POST['id_berita'];
    $penulis = $_POST['penulis'];
    $tgl_posting = date('Y-m-d H:i:s');
    $kontent = $_POST['kontent'];

    // Tambah admin
    if(isset($_POST['addUser'])){
        extract($_POST);

        $sql = "INSERT INTO user VALUES('$id_user', '$nama', '$jabatan', '$username', '$password')";
        $query = mysqli_query($db, $sql);
        header("location: user.php?user=$data_user[id_user]");
        
    // Edit User
    }else if(isset($_POST['editUser'])){
        extract($_POST);

        mysqli_query($db, "UPDATE user
                            SET id_user='$id_user', nama='$nama', jabatan='$jabatan', username='$username', password='$password'
                            WHERE id_user = '$id_user'");
        header("location: user.php?user=$data_user[id_user]");

    // Hapus User
    }else if($act == 'deletedUser'){

        mysqli_query($db, "DELETE FROM user WHERE id_user = '$_GET[id_user]'");
        header("location: user.php?user=$data_user[id_user]");
    
    // Tambah Ralan
    }else if(isset($_POST['addRalan'])){
        extract($_POST);

        $sql = "INSERT INTO ralan VALUES('$id_ralan', '$nm_poli', '$nm_dokter', '$hari', '$hari2', '$jam', '$jam2')";
        $query = mysqli_query($db, $sql);
        header("location: ralan.php?user=$data_user[id_user]");

    // Edit Ralan
    }else if(isset($_POST['editRalan'])){
        extract($_POST);

        mysqli_query($db, "UPDATE ralan
                            SET id_ralan='$id_ralan', nm_poli='$nm_poli', nm_dokter='$nm_dokter', hari='$hari', hari2='$hari2', jam='$jam', jam2='$jam2'
                            WHERE id_ralan = '$id_ralan'");
        header("location: ralan.php?user=$data_user[id_user]");

    // Hapus Ralan
    }else if($act == 'deletedRalan'){

        mysqli_query($db, "DELETE FROM ralan WHERE id_ralan = '$_GET[id_ralan]'");
        header("location: ralan.php?user=$data_user[id_user]");

    // Tambah Ranap
    }else if(isset($_POST['addRanap'])){
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];

        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_ruang. $nm_ruang.".".$tipe_file;

            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file,"$folder");
        }else{
            $file_foto="-";
        }

        $sql = "INSERT INTO ranap VALUES('$id_ruang', '$nm_ruang', '$kelas', '$jml_ruang', '$file_foto')";
        $query = mysqli_query($db, $sql);
        header("location: ranap.php?user=$data_user[id_user]");

    //Edit Ranap
    }if (isset($_POST['editRanap'])) {
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];

        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $nm_ruang.".".$tipe_file;

            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $file_foto=$foto_awal;
        }

        mysqli_query($db, "UPDATE ranap
                            SET nm_ruang='$nm_ruang', kelas='$kelas', jml_ruang='$jml_ruang', gambar='$file_foto'
                            WHERE id_ruang = '$id_ruang'");

        header("location: ranap.php?user=$data_user[id_user]");

    // Hapus Ranap
    }else if($act == 'deletedRanap'){

        mysqli_query($db, "DELETE FROM ranap WHERE id_ruang = '$_GET[id_ruang]'");
        header("location: ranap.php?user=$data_user[id_user]");

    
    // Tambah Fasilitas
    }else if(isset($_POST['addFasilitas'])){
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];

        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_fasilitas. $nm_fasilitas.".".$tipe_file;

            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file,"$folder");
        }else{
            $file_foto="-";
        }

        $sql = "INSERT INTO fasilitas VALUES('$id_fasilitas', '$nm_fasilitas', '$file_foto', '$des_fasilitas')";
        $query = mysqli_query($db, $sql);
        header("location: fasilitas.php?user=$data_user[id_user]");

    //Edit Fasilitas
    }if (isset($_POST['editFasilitas'])) {
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];

        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_fasilitas.$nm_fasilitas.".".$tipe_file;

            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $file_foto=$foto_awal;
        }

        mysqli_query($db, "UPDATE fasilitas
                            SET nm_fasilitas='$nm_fasilitas', gambar='$file_foto', deskripsi='$des_fasilitas'
                            WHERE id_fasilitas = '$id_fasilitas'");
        header("location: fasilitas.php?user=$data_user[id_user]");

    // Hapus Faasilitas
    }else if($act == 'deletedFasilitas'){

        mysqli_query($db, "DELETE FROM fasilitas WHERE id_fasilitas = '$_GET[id_fasilitas]'");
        header("location: fasilitas.php?user=$data_user[id_user]");

    // Tambah Galeri
    }else if(isset($_POST['addGaleri'])){
    extract($_POST);
    $nama_file = $_FILES['gambar']['name'];

    if(!empty($nama_file)){
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_galeri. $deskripsi.".".$tipe_file;

        $folder = "img/$file_foto";
        move_uploaded_file($lokasi_file,"$folder");
    }else{
        $file_foto="-";
    }

    $sql = "INSERT INTO galeri VALUES('$id_galeri', '$deskripsi', '$file_foto')";
    $query = mysqli_query($db, $sql);
    header("location: galeri.php?user=$data_user[id_user]");

    //Edit Galeri
    }if (isset($_POST['editGaleri'])) {
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];

        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_galeri.$nm_galeri.".".$tipe_file;

            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $file_foto=$foto_awal;
        }

        mysqli_query($db, "UPDATE galeri
                            SET deskripsi='$deskripsi', gambar='$file_foto'
                            WHERE id_galeri = '$id_galeri'");
        header("location: galeri.php?user=$data_user[id_user]");

    // Hapus Galeri
    }else if($act == 'deletedGaleri'){

        mysqli_query($db, "DELETE FROM galeri WHERE id_galeri = '$_GET[id_galeri]'");
        header("location: galeri.php?user=$data_user[id_user]");


    // Tambah Pengumuman
    }else if(isset($_POST['addPengumuman'])){
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];
    
        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_peng. $judul.".".$tipe_file;
    
            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file,"$folder");
        }else{
            $file_foto="-";
        }
    
        $sql = "INSERT INTO pengumuman VALUES('$id_peng', '$judul', '$file_foto', '$isi', '$tgl')";
        $query = mysqli_query($db, $sql);
        header("location: pengumuman.php?user=$data_user[id_user]");
    
    //Edit Fasilitas
    }if (isset($_POST['editPengumuman'])) {
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];
    
        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_peng.$judul.".".$tipe_file;
    
            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $file_foto=$foto_awal;
        }
    
        mysqli_query($db, "UPDATE pengumuman
            SET judul='$judul', gambar='$file_foto', isi='$isi', tgl='$tgl' WHERE id_peng = '$id_peng'");
        header("location: pengumuman.php?user=$data_user[id_user]");
    
    // Hapus Ranap
    }else if($act == 'deletedPeng'){
    
        mysqli_query($db, "DELETE FROM pengumuman WHERE id_peng = '$_GET[id_peng]'");
        header("location: pengumuman.php?user=$data_user[id_user]");
    
    //Tambah Berita
    }else if(isset($_POST['addBerita'])){
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];
    
        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_berita. $judul.".".$tipe_file;
    
            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file,"$folder");
        }else{
            $file_foto="-";
        }
    
        $sql = "INSERT INTO berita VALUES('$id_berita', '$penulis', '$judul', '$file_foto', '$kontent', '$tgl_posting')";
        $query = mysqli_query($db, $sql);
        header("location: berita.php?user=$data_user[id_user]");
    
    //Edit Berita
    }if (isset($_POST['editBerita'])) {
        extract($_POST);
        $nama_file = $_FILES['gambar']['name'];
    
        if(!empty($nama_file)){
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
            $file_foto = $id_berita.$judul.".".$tipe_file;
    
            $folder = "img/$file_foto";
            move_uploaded_file($lokasi_file, "$folder");
        } else {
            $file_foto=$foto_awal;
        }
    
        mysqli_query($db, "UPDATE berita
            SET judul='$judul', penulis='$penulis', gambar='$file_foto', kontent='$kontent', tgl_posting='$tgl_posting' WHERE id_berita = '$id_berita'");
        header("location: berita.php?user=$data_user[id_user]");
    
    // Hapus Ranap
    }else if($act == 'deletedBerita'){
    
        mysqli_query($db, "DELETE FROM berita WHERE id_berita = '$_GET[id_berita]'");
        header("location: berita.php?user=$data_user[id_user]");
    
    //Tambah 
    }
?>