<?php 

$dsn ="mysql:host=localhost;dbname=vehicle";
$username = "root";
$password = "";

try{
$conn = new PDO($dsn, $username, $password);
    //echo "Connected successfully";
}
catch(PDOException $e){
    //echo "Connection failed: " . $e->getMessage();
}

?>