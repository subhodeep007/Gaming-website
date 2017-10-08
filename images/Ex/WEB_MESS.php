<!doctype html>
<html>

<head>
    <title>Web_Messenger</title>
    <style>
        p{
            color:white;
        }
        </style>
</head>

<body background="images\Facebook-Wallpaper-HD (1).jpg" class="login">

    <!--header starts here-->
         <form id="login" method="POST" action="explore.php" name="login_form" target="_blank">

        <table align="right" border="0" style="border:none">
            <tr>
               <b><strong><big><p align="right" size="5"> sign in</p></big></strong></b>
                <td align="right"><input type="text" tabindex="1" id="email" name="email" placeholder="Email or Username" class="inputtext radius1" required="required"
                    /></td>
                <td align="right"><input type="password" tabindex="1" id="password" name="password" placeholder="Password" class="inputtext radius1" required="required"
                    /></td>
                <td align="right"><input type="submit" class="button" name="login" value="Login" /></td>
            </tr>
            <tr>
                <td><label>
                        <input id="persist_box" type="checkbox" name="persistent" value="2" checked="1"/>
                        <span style="color:#ccc;">Keep me logged in</span></label></td>
                <td><label><a href="http//:www.facebook.com" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
        </table>
    </form>


    <br>
    <h1><p align="center">
            Welcome to Web_Mess</p></h1>
    <h3><p>Sign Up for Web_Mess</p></h3>
    <!--login header-->
    <div class="loginform">
        <form id="login" method="POST" action="explore.php" name="Signup" target="_blank">
            <p>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" required="required"/>

                <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" required="required"/>
            </p>
            <p>
                <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" required="required"/>
            </p>
            <p>
                <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" required="required"/>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="New Password" value="" class="radius" required="required"/>
            </p>
            <p>
                <input type="radio" name="gender" value="Male" required="required" checked>Male
                <input type="radio" name="gender" value="Female" required="required" checked>Female
                <input type="radio" name="gender" value="Other" required="required" checked>Other
            </p>
            <p>
                Birthday</p>
                <input type="date" name="date" value="Date" required="required" > 
            <p>
                <input type="submit" name="submit" class="button" />


        </form>
        </p>
        <p>Note that the form itself is not visible.</p>

        <p>Also note that the default width of a text input field is 20 character</p>
        <br>
    </div>

</body>


</html>