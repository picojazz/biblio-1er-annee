<?php require_once('connexion.php'); ?>
<?php

session_start(); 

if (isset($_POST['Id'])){ 
	$login = mysql_real_escape_string($_POST['Id']); 
	$pass = mysql_real_escape_string($_POST['password']); 
	$privilege = $_POST['privilege'];

$verif_query=sprintf("SELECT * FROM user WHERE Id='$login' AND password='$pass' AND privilege='$privilege'" ); 
$verif = mysql_query($verif_query) or die(mysql_error());
$row_verif = mysql_fetch_assoc($verif);
$utilisateur = mysql_num_rows($verif);

	
	if ($utilisateur) {	
	
	    session_register("authentification"); 
		
		// déclaration des variables de session
		$_SESSION['privilege'] = $row_verif['privilege']; 
		$_SESSION['nom'] = $row_verif['nom']; 
		$_SESSION['prenom'] = $row_verif['prenom']; 
		$_SESSION['Id'] = $row_verif['Id']; 
		$_SESSION['password'] = $row_verif['password']; 
		
		header("Location:accueil.php"); 
	}
	else {
		header("Location:index.php?erreur=login"); 
	}
}

// Gestion de la  déconnexion
if(isset($_GET['erreur']) && $_GET['erreur'] == 'logout'){ 
	$prenom = $_SESSION['prenom']; 
	session_unset("authentification");
	header("Location:index.php?erreur=delog&prenom=$prenom");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Picojazz Bibliotheque</title>
</head>
<body>
<?php
include 'Entete.php';
?>
<p class="title">
    <?php if(isset($_GET['sign']) && ($_GET['sign'] == "ok")) {  ?>
    <strong class="erreur">inscription reusie !!!!!!</strong>
    <?php } ?>
    <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "login")) {  ?>
    <strong class="erreur">Echec d'authentification !!!  login ou mot de passe ou privilege incorrect</strong>
    <?php } ?>
    <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "delog")) {  ?>
    <strong class="reussite">D&eacute;connexion r&eacute;ussie... A bient&ocirc;t <?php echo $_GET['prenom'];?> !</strong>
    <?php } ?>
    <?php if(isset($_GET['erreur']) && ($_GET['erreur'] == "intru")) {  ?>
    <strong class="erreur">Echec d'authentification !!!  Aucune session n'est ouverte ou vous n'avez pas les droits pour afficher cette page</strong>
    <?php } ?>
  </p>
<div class="formulaire">
<form method="post" action="">

	<div class="container">
		<div class="top">
			
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>connexion</h2>
			</div>
			<label for="username">Id</label>
			<br/>
			<input type="text" name="Id" id="username">
			<br/>
			<label for="password">Mot de Passe</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<select name="privilege"><option value="administrateur">administrateur</option>
	<option value="utilisateur">utilisateur</option></select>
			<br><br><br>
			<button type="submit" >connexion</button>
			<br/>
		</div>
	</div>

</form>
</div>
<div class="formulaire1">
<form method="post" action="info.php">

	<div class="container">
		<div class="top">
			
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>inscription</h2>
			</div>
			<label>Id</label>
			<br/>
			<input type="text" name="Id" required="true">
			<br/>
			<label>Mot de Passe</label>
			<br/>
			<input type="password" name="pass" required="true">
			<br/>
			<label>Nom</label>
			<br/>
			<input type="text" name="nom" required="true">
			<br/>
			<label>Prenom</label>
			<br/>
			<input type="text" name="prenom" required="true">
			<br><br><br>
			<button type="submit" name="inscription">S'inscrire</button>
			<br/>
		</div>
	</div>
</form>
</div>

<p class="citation">"Une bibliothèque est un hôpital pour l'esprit."</p>
</body>
</html>