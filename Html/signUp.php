<!DOCTYPE html>
<html lang="en">
<?php
require_once("action.php");
$error = false;
$success = false;

if(@_POST["userSubmit"]){

    if(!@_POST["username"]){
        $error .= "<p>You must enter in an email!</p>"
    }
}

?>
<script src="scipt.js" type="text/javascript"></script>
<script src="jquery.js" type="text/javascript"></script>
<head>
    <meta charset="UTF-8">
    <title>Recordio</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>

<div id='loginSignUp' style="position: relative; right:200px; z-index:1000;">
    <a href='signUp.php'>
        <button id="signUp" style="float:right;">Sign Up</button>
    </a>
    <!--Above is the sign up page !-->
    <a href='login.php'>
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

<div id="bigContent">
    <p><br></p>
    <form name="userSubmit" action="action.php">
        <br>
        <input type="text" name="username" placeholder="Username">
        <br>
        <br>
        <input type="text" name="firstname" placeholder="First Name">
        <br>
        <br>
        <input type="text" name="lastname" placeholder="Last Name">
        <br><br>
        <input type="submit" name="userSubmit" value="Submit">
    </form>
    <p><br></p>
</div>

<div id ="footer">
    Copyright &copy; 2015 Our Team</div>
</body>
</html>