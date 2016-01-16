<!DOCTYPE html>
<html lang="en">
<script src="script.js" type="text/javascript"></script>
<script src="jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css">
<link rel ="shortcut icon" href="logofinal_copy.ico"/>

<head>
    <meta charset="UTF-8">
    <title>Recordio</title>



</head>
<body>

<div id="loginSignUp" style="position: relative;right:200px;  z-index:1000;">
    <a href="signUp.php">
        <button id="signUp" style="float:right;">Sign Up</button>
    </a>
    <!--Above is the sign up button that links you to the sign up page -->

</div>

<a href="index.php">
    <button  id="homeButton" style="position: relative; z-index:1000"><img width="auto" height="100%" src="logo.png">
    </button></a>


<div id="header">
    <p style="font-size: 60px;font-family: Baskerville, 'Baskerville Old Face', 'Hoefler Text', Garamond, 'Times New Roman', serif;
">Recordio</p>
</div>

<div id="bigContent">
    
    <?php
require_once("action.php");
$error = false;
$success = false;

if(@$_POST["userSubmit"] == "Submit"){
    $errorMessage = "";

    if(empty($_POST["username"])){
        $errorMessage .= "<p>You must enter in a username!</p>";
    }
    if(empty($_POST["firstName"])){
        $errorMessage .= "<p>You must enter your first name!</p>";
    }
    if(empty($_POST["lastName"])){
        $errorMessage .= "<p>You must enter your last name!</p>";
    }
    if(empty($_POST["email"])){
        $errorMessage .= "<p>You must enter your email!</p>";
    }
}

$stmt = $dbh->prepare("INSERT INTO main (username, firstName, lastName, email) VALUES (:username, :firstName, :lastName, :email)");

   $result = $stmt->execute(array
   (
       'username'=>$_POST['username'],
       'firstName'=>$_POST['firstName'],
       'lastName'=>$_POST['lastName'],
       'email'=>$_POST['email'],
   ));
   if($result){
    $success = "User" . $_POST['username'] . "was successfully created!";
   }
   else{
    $success = "There was a screw up when creating" . $_POST["username"] . ". Sorry!";
   }

?>
    <p><br></p>
    <form name="userSubmit" action="signUp.php" method="post">
        <br>
        <input type="text" name="username" placeholder="Username">
        <br>
        <br>
        <input type="text" name="firstName" placeholder="First Name">
        <br>
        <br>
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <br>
        <input type="submit" name="userSubmit" value="Submit">
    </form>
    <p><br></p>
</div>

<div id ="footer">
    Copyright &copy; 2015 Recordio Team</div>
</body>
</html>