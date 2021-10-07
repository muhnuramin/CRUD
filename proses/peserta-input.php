<?php
include'../koneksi.php';

$nama_siswa=$_POST['nama_siswa'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$sekolah_asal=$_POST['sekolah_asal'];
$Setatus=$_POST['Setatus'];
if(isset($_POST['submit'])){

        $sql="INSERT INTO siswa
                VALUES('','$nama_siswa','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$Setatus')";
        $query=mysqli_query($db,$sql);

        if (!$query) {
                echo"<script>alert('Data gagal diinput');
                document.location.href='../index.php?p=peserta1';
                </script>";
        }else{
                // echo"<script>alert('Data berhasil diinput');
                // document.location.href='../index.php?p=peserta1';
                // </script>";
                session_start();
                if($_SESSION['roles']=="Admin"){
                        echo"<script>alert('Data berhasil diinput Admin');
                        document.location.href='../indexAdmin.php?p=peserta2';
                        </script>";
                }else {
                        echo"<script>alert('Data berhasil terdaftar');
                        document.location.href='../index.php?p=peserta1';
                        </script>";
                }
        }
}
?>