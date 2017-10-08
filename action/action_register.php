<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>

<body>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
$clan_name = $_POST["ClanName"];
echo "Your Clan Name is: ".$clan_name;
echo "<br/>Clan Members are:<br/> ";
$member1name=$_POST["Member1name"];
$member2name=$_POST["Member2name"];
$member3name=$_POST["Member3name"];
$member4name=$_POST["Member4name"];
$member5name=$_POST["Member5name"];
echo $member1name."<br/>".$member2name."<br/>".$member3name."<br/>".$member4name."<br/>".$member5name;
$query="INSERT into clan_registration(id,clan_name,member1_name,member2_name,member3_name,member4_name,member5_name) values('','$clan_name','$member1name','$member2name','$member3name','$member4name','$member5name')";
$run=mysqli_query($link,$query);
if($run)
{
	echo "<br/>Successfully Added";
}
else
{
	mysqli_error($link);
}
}
?>
<h3>Thanks for Registration</h3>
<form action="../CS TEAM.php" method="post">
<input type="submit" name="Submit" value="Back"/>
</form>
</body>
</html>