<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>bibiotheque</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>

<p class="titrepage"> voir tout les listes</p>
<?php if($_SESSION['privilege'] == "administrateur") { ?>
	<a href="livre.php" class="livre1">
		<p class="textlivre">LIVRE</p>
	<a>
	<a href="lecteur.php" class="lecteur1">
		<p class="textlecteur">LECTEUR</p>
	<a>
	<a href="emprunt.php" class="emprunt1">
		<p class="textemprunt">EMPRUNT</p>
	<a>
<?php } ?>
<?php if($_SESSION['privilege'] == "utilisateur") { ?>
<a href="livre.php" class="livre1">
		<p class="textlivre">LIVRE</p>
	<a>

	<a href="emprunt.php" class="emprunt1">
		<p class="textemprunt">EMPRUNT</p>
	<a>
<?php } ?>
</body>
</html>