<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['button'])){
	$req1="DELETE FROM lecteur WHERE Id='".$_POST['Id']."'"; 
	$resultat1=mysql_query($req1);
	$req2="DELETE FROM user WHERE Id='".$_POST['Id']."'"; 
	$resultat2=mysql_query($req2);
    header("location:lecteur.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>suppression d'un lecteur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Suppression D'un Lecteur</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			

		<p class="submit">
			<input type="submit" name="button" value="supprimer" />
		</p>
	</form>
</body>
</html>