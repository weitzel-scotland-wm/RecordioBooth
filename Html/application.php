<!DOCTYPE html>
<html lang="en">
<script src="script.js" type="text/javascript"></script>

<head>
    <meta charset="UTF-8">
    <title>Recordio</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


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
    </button>
</a>

<div id="header">
    <p style="font-size: 60px;font-family: Baskerville, 'Baskerville Old Face', 'Hoefler Text', Garamond, 'Times New Roman', serif;
">Recordio</p>
</div>

<div id="bigContent" style="color:white">
<?php
require_once("action.php");
$success = false;
$error = false;
?>
    <br>
    <br>
    <form action="action.php">
        <div style="position:relative; left:-33%">
        Name:<br>
        <input type="text" name="name" value="">
        <br><br>
        Date of Usage:<br>
        <input type="date" name="date" value="">
        <br><br>
        Time of Usage:<br> <br>
        <input type="time" name="time" value=""> Through
        <input type="time" name="time" value="">
        </div>
        <div style="position:relative;left: 33%; top: -165px;">
        Credit Card:
            Name (On card):<br>
            <input type="text" name="cardName" value="">
            <br><br>
            Number:<br>
            <input type="text" name="cardNumber" value="">
            <br><br>
            Expiration Date:<br>
            <input type="month" name="cardDate" value="">
            <br><br>
            Security Number:<br>
            <input type="text" name="cardSecurity" value="">
        </div>
        <div style="position: relative; bottom: 370px;">Price:

        </div>
        <input type="submit" value="Submit">
    </form>
    <p><br></p>
</div>

<div id ="footer">
    Copyright &copy; 2015 Recordio Team</div>
</body>
</html>