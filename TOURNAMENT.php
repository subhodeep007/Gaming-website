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
    <title>TOURNAMENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css"/>
</head>
<body background="images/background-wallpaper-for-websites-6.jpg">
<header>
		<ul type="none">
        <li>
    <a href="CS TEAM.php">
        CS Team</a></li>
    <li>
    <a href="Home.php">
        Home</a></li>
    <li>
    <a class="active"href="TOURNAMENT.php">
        Tournaments</a></li>
    <li>
    <a href="ABOUT.php">
    About</a></li>
    <li>
    <a href="CONTACT.php">
    Contact</a></li>
     <li style="float:right">
    <a href="action/logout.php">
    Sign Out</a></li>
    </li>
    </ul>
</header>
<br/>
<br/>
<br/>
<h2 align="center" style="color:#CCC"><p>TOURNAMENTS</p>
<img src="images/baixaki-cs16.png" width="900" height="220"/>
</h2>
<div class="container">
<div class="wrapper">
  <p><i><marquee><font face="broadway" color="#FF0000" size="5">Be the Part of the Tournament..........Register Now</font></marquee></i></p>
<h3 align="left" style="color:#CCC">Participate For Tournament:</h3>
<h4 align="center" style="color:">

  

    <p> <img src="images\maxresdefault (3).jpg" height="270px" width="300px"
            align="right"></p>
    <p> <img src="images\maxresdefault (2).jpg" height="270px" width="300px"
            align="right"></p>
    <p>
        <font color="grey">Submit Clans Name:</font>
    </p>
    <form action="action/action_tournament.php" method="post">
    <input type="text" id="clanname" name="clanname"placeholder="Clan name" required>
    <input type="submit" value="Submit" name="submit">
	</form>
    <br/>
    <br/>
    <p><b><font face="Broadway" color="red" size="4">Check Here to see which tournament is going on:</font></b></p>
      <a href="http://wiki.teamliquid.net/counterstrike/Premier_Tournaments" target="_blank" ><font color="NAVAJOWHITE">TOURNAMENT LIST
         </font></a>
</h4>
<br/>
<br/>
<br/>
<footer>
<abbr>©</abbr> 2017 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life logo, the Lambda logo, Steam, the Steam logo, Team Fortress, the Team Fortress logo, Opposing Force, Day of Defeat, the Day of Defeat logo, Counter-Strike, the Counter-Strike logo, Source, the Source logo, Counter-Strike: Condition Zero, Portal, the Portal logo, Dota, the Dota 2 logo, and Defense of the Ancients are trademarks and/or registered trademarks of Valve Corporation. All other trademarks are property of their respective owners.
</footer>
</div>
</div>         
</body>
</html>