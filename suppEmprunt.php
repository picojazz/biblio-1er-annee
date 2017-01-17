<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['button'])){
	$req1="DELETE FROM emprunt WHERE id='".$_POST['Id']."'"; 
	$resultat1=mysql_query($req1);
	
	
    header("location:emprunt.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>suppression d'un emprunt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Suppression D'un emprunt</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			

		<p class="submit">
			<input type="submit" name="button" value="supprimer" />
		</p>
	</form>
</body>
</html>