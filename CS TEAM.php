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
    <title>CS TEAM</title>
  	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <link href="css/style.css" rel="stylesheet" type="text/css"/>
     <link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css"/>
</head>
<body background="images/background-wallpaper-for-websites-6.jpg">
<header>
		<ul type="none">
        <li>
    <a class="active" href="CS TEAM.php">
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
<h2><p>COUNTER STRIKE TEAM</p>
<img src="images/image.jpg" width="900" height="250"/>
</h2>
<div class="container">
<div class="wrapper">
<article>
<logo>
<img src="images/counterstrikeonline2.jpg" width="340" height="350"/>
</logo>
<h2 style="color:#03F"> Register Your clan</h2>
 <form action="action/action_register.php" method="post" style="color:#CCC">
        Name:
        <input type="text" id="ClanName" name="ClanName" placeholder="Clan name" required="required">
        <p>Enter The Members Name:</p>
        <p><input type="text" id="Member1Name" name="Member1name" placeholder="Member1 name" required="required"><p>
        <p><input type="text" id="Member2Name" name="Member2name" placeholder="Member2 name" required="required"></p>
        <p><input type="text" id="Member3Name" name="Member3name" placeholder="Member3 name" required="required"></p>
        <p><input type="text" id="Member4Name" name="Member4name" placeholder="Member4 name" required="required"></p>
        <p><input type="text" id="Member5Name" name="Member5name" placeholder="Member5 name" required="required"></p>
        <input type="submit" value="Submit" name="submit">
        
        </form>
    
    <p>
        <font color="grey">Also note that the default width of a text input field is 20 character.</font>
    </p>
    </article>
   
    <footer>
    <abbr>©</abbr> 2017 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life logo, the Lambda logo, Steam, the Steam logo, Team Fortress, the Team Fortress logo, Opposing Force, Day of Defeat, the Day of Defeat logo, Counter-Strike, the Counter-Strike logo, Source, the Source logo, Counter-Strike: Condition Zero, Portal, the Portal logo, Dota, the Dota 2 logo, and Defense of the Ancients are trademarks and/or registered trademarks of Valve Corporation. All other trademarks are property of their respective owners.
    </footer>
    </div>
    </div>
</body>

</html>