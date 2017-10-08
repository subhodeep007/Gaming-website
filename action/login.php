<?php
		include('connect.php');
		if(isset($_POST['login']))
		{
			$email=$_POST['email'];
			$password=$_POST['password'];
			$query="SELECT * from cs_login where email='$email' and password='$password' ";
			$run=mysqli_query($link,$query);
			$num=mysqli_num_rows($run);
			if($num==1)
			{
				session_start();
				$_SESSION['email']=$email;
				header('location:../Home.php');
			}
			else
			{
				$msg="*Username and Password is wrong";
				header("location:../index.php?msg=$msg");
			}
		}
?>