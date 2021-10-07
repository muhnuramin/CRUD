<?php
include'../koneksi.php';
$id_siswa=$_GET['id_siswa'];

mysqli_query($db,
        "DELETE FROM siswa
        WHERE id_siswa='$id_siswa'");
header("location:../indexAdmin.php?p=peserta2");
?>