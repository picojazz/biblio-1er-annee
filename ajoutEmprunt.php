<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['but'])){
	$req="INSERT INTO emprunt SET nomLecteur='".$_POST['nomLecteur']."',nomLivre='".$_POST['nomLivre']."',delai='".$_POST['delai']."',dateEmp='".$_POST['dateEmprunt']."',dateRendu='".$_POST['dateRendu']."'";
	$resultat=mysql_query($req);
    header("location:emprunt.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ajout d'un emprunt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Ajout D'un Emprunts</p>
<form class="form" method="post">
		
		    <label>nom du lecteur complet</label>
			<input type="text" name="nomLecteur" required="true" />
			<label>Nom du livre</label>
			<input type="text" name="nomLivre" required="true" />
			<label>delai</label>
			<input type="text" name="delai" required="true" />
			<label>Date D'emprunt</label>
			<input type="date" name="dateEmprunt" required="true"  />
			<label>Date rendu</label>
			<input type="date" name="dateRendu" required="true" />
			
		

		<p class="submit">
			<input type="submit" name="but" value="enregistrer" />
		</p>
	</form>
</body>
</html>