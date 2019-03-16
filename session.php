<?php 
session_start();
if(!isset($_SESSION["id"])){ // if "role" not set,
	session_destroy();
	header('Location: login.php');     // redirect to login page
}
?>
