<?php

session_start(); 
include('db.php');

 	if (isset($_SESSION['id'])) {
 	}
 	else{

 		header('location:index.php');
 	}
?>

<html>
<title>Admin Panel</title>

<Style>
body {
	background-color: white;
}
</style>
<head>
<frameset cols="15%,85%" frameborder="0">
<!-- <frame src="header.php" noresize="noresize"> -->

<frame src="modules.php" name="FraLink">

<frameset rows="65px,100%">

<frame src="backheader.php" name="FraNav">
<frame src="Communication/dashboard.php" name="FraDisplay">
</frameset>

</frameset>
</head></html>