<?php
include'../koneksi.php';
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$roles=$_POST['roles'];
if(isset($_POST['submit'])){
    $sql="INSERT INTO user
    VALUES('','$nama','$username','$password','$roles')";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        echo"<script>alert('Data gagal diinput');
        document.location.href='../login.php';
        </script>";
    }else{
        echo"<script>alert('Data berhasil diinput');
        document.location.href='../login.php';
        </script>";
    }
}
?>