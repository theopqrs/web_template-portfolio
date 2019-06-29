<?php 
	
	$_SESSION['admin_auth'] = "nope";
	$admin_email = "c@c.c";
	$admin_password = "c";
	function retrieve_info_site(){
	session_start();
	$pdo = new PDO('mysql:host=localhost;dbname=portofilio_site', 'root', '');
	$infos = $pdo->query("SELECT * FROM config");
	$infoss = $infos->fetch();
	$_SESSION['site_title'] = $infoss['site_name'];
	$_SESSION['admin_name'] = $infoss['admin_name'];
	$_SESSION['admin_description'] = $infoss['admin_description'];
	$_SESSION['admin_email'] = $infoss['admin_email'];
	$_SESSION['admin_twitter'] = $infoss['admin_twitter'];
	$_SESSION['admin_facebook'] = $infoss['admin_facebook'];
	$_SESSION['admin_instagram'] = $infoss['admin_instagram'];
	$_SESSION['admin_dribble'] = $infoss['admin_dribble'];
}