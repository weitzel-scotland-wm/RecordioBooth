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
    <button id="login" style="float:right;">Login</button>
</div>

<a href="index.php">
    <button  id="homeButton" style="position: relative; z-index:1000"><img width="auto" height="100%" src="logo.png">
    </button></a>


<div id="header">
    <p style="font-size: 60px;font-family: Baskerville, 'Baskerville Old Face', 'Hoefler Text', Garamond, 'Times New Roman', serif;
">Recordio</p>
</div>

<div id="loginInfo" style="color:white">
    <br>
    <form action="action.php">
        <div style="position:relative;">
            Username:<br>
            <input type="name" name="name" value="" required>
            <br>
            Password:<br>
            <input type="password" name="password" value="" required>
            <br><br>
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