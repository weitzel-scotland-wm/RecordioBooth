<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <title>Recordio</title>

    <link rel="stylesheet" href="style.css">
    <!--Link to style sheet-->
    <link rel ="shortcut icon" href="logofinal_copy.ico"/>
</head>
<body>

<div id="loginSignUp">
    <a href="signUp.php">
        <button id="signUp" style="float:right;">Sign Up</button>
    </a>
    <!--Above is the sign up button that links you to the sign up page -->

</div>


<a href="index.php">
<button  id="homeButton" style="position: relative; z-index:1000"><img width="auto" height="100%" src="logo.png">
</button></a>
<!--Above is the home button, that refreshes the page back to the index-->



<div id="header">
    <p style="font-size: 60px;font-family: Baskerville, 'Baskerville Old Face', 'Hoefler Text', Garamond, 'Times New Roman', serif;
">Recordio</p>



</div>

<div id="nav">

    <a href="Careers.php"> <p>Careers</p> </a>
    <a href="aboutUs.php"> <p>About Us</p> </a>
    <a href="findUs.php"> <p>Find Us</p> </a>
    <a href="Eula.php"> <p>Terms and Conditions</p> </a>
    <!--The nav bar contains lists and links across pages of html that direct you to different pages of the site-->
    <!--The nav will highlight in azure (white) depending on what pages you are on-->
</div>

<div id ="content">

<?php
require_once("action.php");
$success = false;
$error = false;
?>
<br>
    <div id="scroller" style="width: 550px; height: 400px; margin: 0 auto;">
        <div class="innerScrollArea">
            <ul>
            <li><img src="IMG_0913.JPG" width="600" height="400" /></li>
            <li><img src="IMG_0914.JPG" width="600" height="400" /></li>
            <li><img src="IMG_0915.JPG" width="600" height="400" /></li>
            </ul>
        </div>
    </div>
</div>

<div id ="footer">
    Copyright &copy; 2015 Recordio Team
<!-- Copyright in the footer bar of our website-->
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="jquery.js" type="text/javascript"></script>
<script src="script.js"></script>



</body>
</html>