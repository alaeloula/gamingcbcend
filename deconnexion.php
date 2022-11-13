<?php 
session_start();
if($_SESSION['login']){
    $_SESSION['login']=false;
    header("Location: ./login.php");
		exit();
}
?>