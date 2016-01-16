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
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

 ini_set('display_errors',1);  
 error_reporting(E_ALL);
?>
