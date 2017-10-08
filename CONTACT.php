<?php
		session_start();
		if(isset($_SESSION['email']))
		{
			
			
		}
		else
		{
			header('location:index.php');
		}
?>
<!doctype html>
<html>
<head>
    <title>CONTACT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css"/>
</head>
<header>
		<ul type="none">
        <li>
    <a href="CS TEAM.php">
        CS Team</a></li>
    <li>
    <a href="Home.php">
        Home</a></li>
    <li>
    <a href="TOURNAMENT.php">
        Tournaments</a></li>
    <li>
    <a href="ABOUT.php">
    About</a></li>
    <li>
    <a class="active"href="CONTACT.php">
    Contact</a></li>
     <li style="float:right">
    <a href="action/logout.php">
    Sign Out</a></li>
    </li>
    </ul>
</header>
<br/>
<br/>
<body background="images/contactpic.jpg">
   <font face="broadway" color="blue" size="5"> Contact us:</font>
    <p>Members OF Clan WTF</p>
    <p>Email:ClanWTF@gmail.com</p>
    <p>Website:www.CounterstrikeWTF.com</p>
    <p>Phone:00928828290</p>
</body>
</html>