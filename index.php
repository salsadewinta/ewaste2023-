<?php
session_start();
if (!isset($_SESSION["username"])) 
{
	header("Location:utama.php");
}
else
{
	header("Location:utama.php");
}
?>
