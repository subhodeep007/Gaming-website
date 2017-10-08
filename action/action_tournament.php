<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Participation</title>
</head>

<body>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
$clan_name=$_POST['clanname'];
echo "Your Clan Name is: ".$clan_name;
$query="INSERT into tournament_clan (id,clan_name) values('','$clan_name')";
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
<br/>
<h4>Congratulation!</h4>
<p>Your Team is select for Tournament</p>
<h4 align="center">Best Of Luck</h4>
<form action="../TOURNAMENT.php" method="post">
<input type="submit" name="Submit" value="Back"/>
</form>
</body>
</html>