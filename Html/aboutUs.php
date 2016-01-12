<!DOCTYPE html>
<html lang="en">
<script src="scipt.js" type="text/javascript"></script>
<script src="jquery.js" type="text/javascript"></script>
<head>
    <meta charset="UTF-8">

    <title>About Recordio</title>

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


    <a href="Careers.php"> <p>Careers</p> </a>
    <a href="aboutUs.php"> <p style="background-color: darkred">About Us</p> </a>
    <a href="findUs.php"> <p>Find Us</p> </a>
    <a href="Eula.php"> <p>Terms and Conditions</p> </a>
</div>


<div id ="content">
    <img src="Ahmed.jpg" width="45%" height="auto" style="left:300px"/>
    <img src="Erick.jpg" width="45%" height="auto" style="left:300px"/>
    <p>Ahmed Adenola and Erick Ciudad, engaged in their work and programming at the speed of light. Ahmed on the left, charged with legal issues and resolving terms and conditions. Erick on the right, executive css lead, website designer, and Product Owner</p>
    <img src="KylePretzel.jpg" width="50%" height="auto" style="left:300px"/>
    <p>Scotty Pretzel and Kyle Shumway, top of the line code monkeys in the jungle that is West-Mec. Scotland, charged with rigorous duty of creating tables in mySQl and self proclaimed Linux lord. Kyle Shumway, chief organizer and scrum master, set up source tree to us and connects team as a unit.</p>
    <!--Images are sourced from png and jpg files uploaded from within the folder-->
</div>
<div id ="footer">
    Copyright &copy; 2015 Our Team</div>
</body>
</html>