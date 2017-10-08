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
    <title>ABOUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css"/>
    <style>
	#panel,.flip
	{
	font-size:18px;
	padding:10px;
	text-align: center;
    background-color:#999;
    color: white;
    border: solid 1px #000000;
    margin:2px;
	}
	#panel
	{
		display:none;
	}
	</style>
    
</head>
<body background="images/background-wallp
aper-for-websites-6.jpg">
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
    <a class="active" href="ABOUT.php">
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
<h2 align="center" style="color:#CCC"><p>ABOUT US</p>
<img src="images/Counter-Strike-Online.png" width="900" height="270"/>
</h2>
<div class="container">
<div class="wrapper">
<article>
<img src="images/sas.png" width="350" height="340"/>
<h3 align="center" style="color:#FFF">Read About COUNTER STRIKE History</h3>
<h4 align="center" style="color:#999">  
<p class="flip" onClick="myFunction()" onDblClick="myFunction1()">Click on About us</p>
<div id="panel">  
<p>             
This article is about the video game series. For the 2000 game, see Counter-Strike (video game). For other uses, see Counterstrike.
Counter-Strike
Counter-Strike Logo.png
The current Counter-Strike series logo.
Genres	First-person shooter
Developers	
Valve Corporation
Turtle Rock Studios
Hidden Path Entertainment
Gearbox Software
Ritual Entertainment
Nexon
Publishers	
Valve Corporation
Sierra Entertainment
Namco
Nexon
Platforms	
Microsoft Windows
OS X
Linux
PlayStation 3
Xbox
Xbox 360
Platform of origin	Windows
Year of inception	1999
First release	Counter-Strike
June 19, 1999
Latest release	Counter-Strike: Global Offensive
August 21, 2012
Counter-Strike (officially abbreviated as CS) is a series of multiplayer first-person shooter video games, in which teams of terrorists and counter-terrorists battle to, respectively, perpetrate an act of terror (bombing, hostage-taking) and prevent it (bomb defusal, hostage rescue). The series began on Windows in 1999 with the first version of Counter-Strike. It was initially released as a modification for Half-Life and designed by Minh "Gooseman" Le and Jess "Cliffe" Cliffe, before the rights to the game's intellectual property were acquired by Valve Corporation, the developers of Half-Life.
</p>
<p>
The game was followed-up with Counter-Strike: Condition Zero, developed by Turtle Rock Studios and released in 2004. Later that same year, Counter-Strike: Source was released by Valve. Released only eight months after Counter-Strike: Condition Zero, in November 2004, the game was a remake of the original Counter-Strike and the first in the series to run on Valve's newly created Source engine.[1] The fourth game in the main series to have been developed by Valve, Counter-Strike: Global Offensive, was released in 2012 for Windows, OS X, Xbox 360, and PlayStation 3. Hidden Path Entertainment, who also worked on Counter-Strike: Source post-release, helped to develop the game alongside Valve.[2] Several spin-off titles have been released for Asian territories.
</p>
<p>About CSGO
Counter-Strike: Global Offensive (CS:GO) expands upon the team-based action gameplay that the franchise pioneered when it was launched 12 years ago.
</p>
<p>
CS:GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust, etc.). In addition, CS:GO introduces new gameplay modes, matchmaking, leader boards, and more.
</p>
<p> 
Game Modes
Classic: Competitive
This is the classic gameplay that made Counter-Strike famous. Queue up and join a 5v5 best-of-30 match using standard competitive Counter-Strike rules on one of the classic maps. You can join a match on your own, or form a team and enter a match as a unit.
</p>
<p> 
Classic: Casual
Ready to play some Counter-Strike, but don’t want to commit to a full match? Find a casual match and play at your own pace. In Casual mode, players automatically receive body armor and defusal kits and gain bonus rewards for kills.
</p>
<p> 
Demolition
In demolition mode, players take turns attacking and defending a single bombsite in a series of maps designed for fast-paced gameplay. Players are automatically granted a starting weapon, and advance through a sequence of firearms when they register a kill. If you’re up to the challenge, you can try to register a kill each round and reach the ultimate weapons, powerful sniper rifles!
</p>
<p> 
Arms Race
Arms race is a gun-progression mode featuring instant respawning and a ton of close-quarter combat. Players gain new weapons immediately after registering a kill as they work their way through each weapon in the game. Get a kill with the final weapon, a golden knife, and win the match.
</p> 
<p> 
History
In 1999 Counter-Strike was released as a mod for Half-Life. As Counter-Strike progressed from a beta to a full release, it refined the classic gameplay that has come to define competitive shooters and produced a dedicated community that has followed the game for over a decade.</p><p>
Through each of its iterations – 1.6, Source, and Global Offensive – Counter-Strike has been the de facto benchmark of a player’s skill. Teams from around the world are constantly demonstrating their ability and strategies in local, regional, and international tournaments.</p>
Professional Counter-Strike players have become legendary in the international gaming community. Below, learn about some of these players and how they shaped the history of Counter-Strike.
</div>
</h4>
</article>
    <footer>
    <abbr>©</abbr> 2017 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life logo, the Lambda logo, Steam, the Steam logo, Team Fortress, the Team Fortress logo, Opposing Force, Day of Defeat, the Day of Defeat logo, Counter-Strike, the Counter-Strike logo, Source, the Source logo, Counter-Strike: Condition Zero, Portal, the Portal logo, Dota, the Dota 2 logo, and Defense of the Ancients are trademarks and/or registered trademarks of Valve Corporation. All other trademarks are property of their respective owners.
    </footer>
</div>
</div>
<script>
function myFunction()
{
	document.getElementById("panel").style.display ="block";
}
function myFunction1()
{
	document.getElementById("panel").style.display ="none";
}
</script>    
</body>

</html>