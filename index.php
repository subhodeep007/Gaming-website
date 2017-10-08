<?php
		$msg="";
		if(isset($_GET['msg']))
		{
			$msg=$_GET['msg'];
		}
		$renter="";
		if(isset($_GET['renter']))
		{
			$renter=$_GET['renter'];
		}
		$len="";
		if(isset($_GET['len']))
		{
			$len=$_GET['len'];
		}
		$other="";
		if(isset($_GET['other']))
		{
			$other=$_GET['other'];
		}
		

?>

<!doctype html>
    <html>

    <head>
        <title>Counter Strike GO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
        
        <body style="background-color:#F8F8F8"> 
        <div class="container">
			<video poster="images/sas.png" autoplay="autoplay" muted>
			<source src="video/Dreamhack Steelseries CS GO Championship Trailer(720p).MP4" type="video/mp4">
			</video>
            </div>
 			<div class="text">
         <h2>COUNTER-STRIKE:GLOBAL OFFENSIVE</h2>
         </div>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <div class="login">
 <!--header starts here-->
        <form action="action/login.php" method="POST" name="login_form">
        <table align="right" border="0" style="border:none">
            <tr>
         <b><p align="right"><font face="Georgia, Times New Roman, Times, serif" color="#34B6C5" size="5">Sign in</font></p></b>
            <h4 align="right" style="color:#F00"><?php echo $msg;?></h4>
                <td align="right"><input type="text" tabindex="1" id="email" name="email" placeholder="Email Id" class="inputtext radius1" required="required"
                    /></td>
                <td align="right"><input type="password" tabindex="1" id="password" name="password" placeholder="Password" class="inputtext radius1"required="required"
                    /></td>
                <td align="right"><input type="submit" class="button" name="login" value="Login" style="cursor:pointer"/></td>
            </tr>
            <tr>
                <td><label>
                        <input id="persist_box" type="checkbox" name="persistent" value="2" checked="1"/>
                        <span style="color:#ccc;">Keep me logged in</span></label></td>
                <td><label><a href="#" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
        </table>
    </form>
 
    <h3 style="color:#34B6C5"><p>To be part of us:</p></h3>
    <!--login header-->
    <div class="loginform">
    <h4 align="left" style="color:#F00"><?php echo $renter;?></h4>
    <h4 align="left" style="color:#F00"><?php echo $len;?></h4>
    <h4 align="left" style="color:#F00"><?php echo $other;?></h4>
        <form id="login" action="action/action_login.php" method="post" name="Signup">
            <p>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" required="required" />

                <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" required="required" />
            </p>
            <p>
                <input type="email" id="email" name="email" placeholder="Your Email" value="" class="radius" required="required"/>
            </p>
            <p>
                <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" required="required"/>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="New Password" value="" class="radius" required="required"/>
            </p>
            <p style="color:white">
                <input type="radio" name="gender" value="Male" required="required" checked>Male
                <input type="radio" name="gender" value="Female" required="required" checked>Female
                <input type="radio" name="gender" value="Other" required="required" checked>Other
            </p>
            <p>
                <input type="submit" name="submit" class="button" style="cursor:pointer;"/>


        </form>
        </p>
        <br/>
        <p style="color:white">Note that the form itself is not visible. Also note text input field is 20 character.</p>
            </div>
            <div class="banner">
            <img src="images/image-05-700x393.jpg" alt="img" style="width:100%"; height="340"/>
            </div>
            <div class="article">
            <h1 style="text-align:center;color:#2D9CBD;">The Best Pro</h1>
            The best pro gaming to watch this weekend
PC Gamer
<p>
Apr 14
</p>
<p>
This weekend is absolutely bursting with esports goodness as the LCS heads towards the semifinals stage. There’s plenty of action from the Dota 2 StarLadder i-League Invitational to the CS:GO Championship Series. We even have the Overwatch: PIT Championship to look forward to. All the details on this weekend’s events can be found below.
League of Legends: 2017 EU LCS Spring Split</p><p>
Last weekend’s quarterfinals of the European League of Legends LCS saw H2K face off against Fnatic. Fnatic shocked viewers around the world when they dominated H2K with their unconventional champion picks. Rekkles’ Twitch was unstoppable and after securing Baron and Elder Dragon buffs, Fnatic stormed into H2K’s base to deliver the final blow to the Nexus. Game two followed a similar pattern as Rekkles found strength in another unorthodox pick. His Vayne plays gave Fnatic a huge power spike in the late-game and they delivered another crushing blow to H2K. In match point for Fnatic, it was Caps' turn to shine and he locked-in Aurelion Sol in the mid-lane.</p><p>
Meanwhile, Rekkles’ Kennen and Broxah’s Kha'Zix roamed around the map eliminating any signs of life from the H2K roster. Fnatic overcame expectations and they’ll be hoping to deliver another decisive win over G2 Esports in the semifinals. This weekend’s schedule and stream can be found over on LoL Esports.
League of Legends: 2017 NA LCS Spring Split</p><p>
FlyQuest faced Counter Logic Gaming last weekend in the quarterfinals of the North American LCS. The first game of the series saw CLG mid-laner Huhi lock in Aurelion Sol, which he used to pick off FLY’s support multiple times. His global presence was huge, and CLG were able to grab Baron and quickly push into FLY's base for the first win of the series. Game 2 was a back-and-forth affair with both teams struggling to secure a lead. However, a team fight around Baron pit broke out and CLG managed to take down four members of FlyQuest. This successful engage gave CLG plenty of time to dismantle turrets and apply pressure around the map.</p><p>
Game three saw FlyQuest obliterate CLG with Hai’s dominating performance on Talon, while game four also went in favour of FLY thanks to Moon’s excellent Rengar plays. However, FLY took the final game by punishing CLG’s over-aggressive skirmishes and baiting out an Elder Dragon fight. This weekend’s quarterfinal schedule and stream can be found over on LoL Esports.
Dota 2: Summit 7</p><p>
Beyond the Summit continues this summer with the Dota 2: Summit 7 LAN event. The main tournament begins June 14th-18th just outside Los Angeles, California, where teams will go head to head to compete for the $100k prize pool.
However, the South East Asia qualifiers are taking place today and Clutch Gamers and WarriorsGaming.Unity are kicking things off at 01:00 PDT / 10:00 CEST, while TNC Pro Team tackle Happy Feet at 04:00 PDT / 13:00 CEST. Clutch Gamers and TNC Pro are currently at the top of the standings, but this could soon change as we enter the semifinals. Be sure to check out all the action over on Twitch.</p>
            </div>
            <div class="canals">
            <h1 style="text-align:center;color:#2D9CBD;">Take a Trip to Canals</h1>
            <br/>
            <img src="images/de_canals_large.jpg" alt="img1" width="100%" height="550px"/>
            <p>Canals is a brand new map for CS:GO, set in a historic Italian city. Two important tourist attractions are under 			             threat by an international group of terrorists known as the Phoenix, and SEAL Team 6 has been deployed to stop             them.</p>
            <br/>
            <img src="images/canals05_Canal.jpg" alt="img2" width="100%" height="550px"/>
            <p>The map is based on real-world environments that give each area its own architectural style as well as gameplay,             and produce an unconventional layout. The CT side is composed of a large, wide open area while the T-controlled             territory forms a crescent of smaller spaces around it and provides multiple approaches to each bomb site.</p>
            <br/>
            <img src="images/canals03_A.jpg" alt="img3" width="100%" height="550px"/>
            <p>The canal that runs below site B also allows a stealthy approach deep into the CT-controlled area and the A site.             This area has a lot of cover that makes it difficult and hazardous for CTs to hold.</p>
            <br/>
            <img src="images/canals02_T.jpg" alt="img4" width="100%" height="550px"/>
            <p>The bombsites require different tactics and weapon choices for each team. Site A is set in the open CT territory            and rewards the use of smoke grenades as well as rifle skills, while site B is located in the interior where            submachine guns and shotguns will prove most useful.</p>
            <p>We look forward to seeing how the map is received by the players. As with our previous map releases, listening to            feedback from the community will help us make improvements in the future</p>
            </div>
            <br/>
            <div class="article1">
            <h1 style="text-align:center;color:#2D9CBD;">  Ashes to Ashes, Dust to Dust </h1>
            <img src="images/mossawi_846803003456_20150918194928_402157939039.jpg" alt="img5" width="100%" height="600px"/>
             <p>          
              In the wake of the ELEAGUE Major (congratulations Astralis!), we’re making a change to the map pool: 		              Inferno has returned to Active Duty, replacing Dust II, and will be featured at the next CS:GO Major. As in              the past, the updated Active Duty pool is automatically selected when you enter Matchmaking.*</p>
             <p>
              And in Casual and Deathmatch game modes, it’s now a bit easier to play your favorite maps. Map groups have been               separated into additional categories: Active Duty, Hostage, Reserves, and Dust II.</p>
             <p><i>
              *(don’t worry, it’s just as easy as ever to play Dust II. It’s now front and center on the Competitive Matchmaking               map selection screen)</i></p>
         </div>
             <br/>
             <br/>
             <hr/>
     <div class="footer">
               <p><abbr>©</abbr><b> 2017 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life                logo, the Lambda logo, Steam, the Steam logo, Team Fortress, the Team Fortress logo, Opposing Force, Day of               Defeat, the Day of Defeat logo, Counter-Strike, the Counter-Strike logo, Source, the Source logo, Counter-Strike:              Condition Zero, Portal, the Portal logo, Dota, the Dota 2 logo, and Defense of the Ancients are trademarks and/or               registered trademarks of Valve Corporation. All other trademarks are property of their respective owners.</b></p>
            </div>
    </body>

    </html>