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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Home</title>
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
    <a class="active"href="Home.php">
        Home</a></li>
    <li>
    <a href="TOURNAMENT.php">
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
<h2><p>COUNTER-STRIKE: GLOBAL OFFENSIVE</p>
<img src="images/counter strike.jpg" width="900" height="250"/>
</h2>
<div class="container">
<div class="wrapper">
<article>
<logo>
<img src="images/counter_strike___e_frag_tournament_logo_design_by_joewilkinson-d7smac9.png"width="350" height="340"/>
</logo>

<h3 align="center" style="color:#FFF">The next generation of the world's #1 online action game.</h3>
<h4 align="center" style="color:#999">
<p>Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when the original CS was launched 12 years ago.</p>
<p>
CS: GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust, etc.). In addition, CS: GO introduces new gameplay modes, matchmaking, leader boards, and more.
</p>
<p>
Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999. For the past 12 years, it has continued to be one of the most-played games in the world, headlining competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO expands on CS' award-winning gameplay and delivers it to gamers on the PC as well as the next gen consoles and the Mac.
</p>
</h4>

</article>
<br/>
<br/>
<footer>
<abbr>©</abbr> 2017 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life logo, the Lambda logo, Steam, the Steam logo, Team Fortress, the Team Fortress logo, Opposing Force, Day of Defeat, the Day of Defeat logo, Counter-Strike, the Counter-Strike logo, Source, the Source logo, Counter-Strike: Condition Zero, Portal, the Portal logo, Dota, the Dota 2 logo, and Defense of the Ancients are trademarks and/or registered trademarks of Valve Corporation. All other trademarks are property of their respective owners.
</footer>
</div>
</div>

</body>
</html>