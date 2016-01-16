<!DOCTYPE html>
<html lang="en">
<script src="script.js" type="text/javascript"></script>
<script src="jquery.js" type="text/javascript"></script>
<head>
    <meta charset="UTF-8">
    <title>Recordio</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--Other pages are styled the same as the index and copied over-->
<!--The inside of the content div is modified accordingly-->
<div id="loginSignUp">
    <a href="signUp.php">
        <button id="signUp" style="float:right;">Sign Up</button>
    </a>
    <!--Above is the sign up button that links you to the sign up page -->
    <a href="login.php">
        <button id="login" style="float:right;">Login</button>
    </a>
</div>
<a href="index.php">
    <button  id="homeButton" style="position: relative; z-index:1000"><img width="auto" height="100%" src="logo.png">
    </button></a>





<div id="header">
    <p style="font-size: 60px;font-family: Baskerville, 'Baskerville Old Face', 'Hoefler Text', Garamond, 'Times New Roman', serif;
">Recordio</p>



</div>

<div id="nav">

    <a href="Careers.php"> <p style="background-color: darkred">Careers</p> </a>
    <a href="aboutUs.php"> <p>About Us</p> </a>
    <a href="findUs.php"> <p>Find Us</p> </a>
    <a href="Eula.php"> <p>Terms and Conditions</p> </a>

</div>

<div id ="content">
    <div id="logo">
        <img width= 60px height= 60px src="logo.png"/>
    </div>
    <h3>Want to start a career with Recordio?</h3>
    <p> click <a href="application.php">here</a> to fill out an application to send to our hiring managers.</p>
    <p> Your application should include but is not limited to:</p>
    <div id="appList">
    <ul>
        <li>Resume</li>
        <li>References</li>
        <li>Past work experience</li>
    </ul>
    </div>

</div>
<div id ="footer">
    Copyright &copy; 2015 Our Team</div>
</body>
</html>