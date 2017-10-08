<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WELCOME</title>
</head>

<body background="../images/maxresdefault (7).jpg" marginheight="auto" marginwidth="auto">
<h1 align="center">WELCOME</h1>
<h4>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
$firstname=$_POST["firstname"];
echo "Your Firstname is: ".$firstname;
$lastname=$_POST["lastname"];
echo "<br/>Your LastName is: ".$lastname; 
$email=$_POST["email"];
echo "<br/>Your Email is: ".$email;
$remail=$_POST["remail"];
echo "<br/>Your Remail is: ".$remail;
$password=$_POST["password"];
echo "<br/>Your Password is: ".$password;
$gender=$_POST["gender"];
echo "<br/>Your Gender is: ".$gender;
$query="INSERT into cs_login (id,firstname,lastname,email,password,gender) values('','$firstname','$lastname','$email','$password','$gender');";
$length=strlen($password);
if($email==$remail)
{
	if($length>=8)
	{
		$run=mysqli_query($link,$query);
			if($run)
			{
				echo "<br/>Thanks for submittion.";
			}
			else
			{
				echo mysqli_error($link);
				$other="<br/>*Please enter other email id it is already exist.";
				header("location:../index.php?other=$other");
			}
}
else
{
	$len="<br/>*Please enter aleast 8 character Password.";
	header("location:../index.php?len=$len");
}
}
else
{

	$renter="<br/>*Please enter the same valid email id into email and remail section.";
	header("location:../index.php?renter=$renter");
}
}
		
?>
</p>
</h4>

<br/>
<br/>
<br/>
<br/>
<h1 align="center"><a href="../Home.php">To Enter in Website</a></h1>
</body>
</html>