<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
try{
      $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

}
catch(PDOException $e)
{
      die("OOPs something went wrong");
}

?>
