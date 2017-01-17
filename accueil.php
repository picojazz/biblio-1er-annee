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

<div class="corps">
<p class="titre">bienvenue <?php echo $_SESSION['prenom'] ;?> <?php echo $_SESSION['nom'] ;?> dans votre espace privé de Picojazz bibliotheque</p>
	<div class="texte">
<p>
	Depuis le 13 octobre 2015, empruntez en ligne et gratuitement jusqu’à 4 livres numériques par mois sur votre liseuse, votre tablette, votre smartphone, votre PC.<br><br>
 
La bibliothèque numérique propose des milliers de livres, des nouveautés, des essais, des romans, récemment parus, mais aussi une collection de plus de 1 200  livres classiques.<br>
 
Il vous suffit d’être inscrit dans Picojazz bibliothèque . Vous pouvez emprunter 3 livres simultanément et 4 livres par mois.<br>
Les livres numériques sont prêtés quatre semaines.<br><br>
 
Tous les renseignements et les aides techniques sont sur le site de la bibliothèque numérique, dans les pages infos pratiques et mode d’emploi. Des bibliothécaires seront à votre disposition dans tout le réseau.<br> Et si vous n’avez pas de liseuse, vous pouvez en emprunter une dans votre bibliothèque !
 
</p></div>
</div>

</body>
</html>