<!DOCTYPE html>
<html lang="en">
<?php
//---------------------------------------Variables------------------------------------------//
$hostname = "localhost";
$username = "root";
$password = "root";
//---------------------------------------Variables------------------------------------------//

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    echo 'Connected to database';

}

catch(PDOException $e)
    {
        echo $e->getMessage();
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

<div style="position: relative;right:187px;  z-index:1000;">
    <button id="signUp" style="float:right;">Sign Up</button>
    <button id="login" style="float:right;">Login</button>
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
    <form action="action.php">
        Username:<br>
        <input type="text" name="username" value="">
        <br>
        Password:<br>
        <input type="text" name="password" value="">
        <br>
        Confirm Password:<br>
        <input type="text" name="cpassword" value="">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <p><br></p>
</div>

<div id ="footer">
    Copyright &copy; 2015 Our Team</div>
</body>
</html>