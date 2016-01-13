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
