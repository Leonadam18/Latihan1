<?php 
if ($_POST) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_tlp=$_POST['no_tlp'];
    if (empty($email)) {
        echo "<script>alert('email tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($nik)) {
        echo "<script>alert('nik tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($jenis_kelamin)) {
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='register.php';</script>";
    }elseif (empty($no_tlp)) {
        echo "<script>alert('no telepon tidak boleh kosong');location.href='register.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into ujian_rpl (email, password, nik, nama, alamat, jenis_kelamin, no_tlp, id_jabatan) value ('".$email."','".md5($password)."','".$nik."','".$nama."','".$alamat."','".$jenis_kelamin."','".$no_tlp."','".$id_jabatan."')") or
        die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan data');location.href='register.php';</script>";
        }else {
            echo "<script>alert('Gagal menambahkan data');location.href='register.php';</script>";
        }
    }
}
?>