<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$_SESSION['login']=true;
			$user	= isset($_POST['user']) ? $_POST['user'] : "";
			$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";
			$qry	= mysqli_query($db,"SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
			$sesi	= mysqli_num_rows($qry);//perhitungan

			if ($sesi == 1)
			{
				$data_user	= mysqli_fetch_array($qry);
                if($data_user['roles']=="Admin"){
					$_SESSION['roles'] = "Admin";
                    echo "<script>alert('Anda berhasil Log In');</script>";
                    header("location:indexAdmin.php");
                }else if($data_user['roles']=="User"){
					$_SESSION['roles'] = "User";
                    echo "<script>alert('Anda berhasil Log In');</script>";
                    header("location:index.php");
                }
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
		
		
	}
	else
	{
	include "login.php";
	}
?>
