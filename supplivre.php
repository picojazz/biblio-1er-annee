<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['button'])){
	$req1="DELETE FROM livre WHERE Id='".$_POST['Id']."'";
	$resultat1=mysql_query($req1);
    header("location:livre.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>supprimmer</title>
</head>
<body>
<?php include 'menuEtEntete.php';?>
<p class="titrepage"> Suppression D'un Livre</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			

		<p class="submit">
			<input type="submit" name="button" value="supprimer" />
		</p>
	</form>
</body>
</html>