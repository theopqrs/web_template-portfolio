<?php
session_start();
if($_SESSION['admin_auth'] == "yep"){
	echo "Quick redac' page";
}else{
	header('Location: login.php');
}

 ?>

 html