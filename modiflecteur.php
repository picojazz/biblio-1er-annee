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
	<title>modification d'un lecteur</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Modification d'un lecteur</p>
<form class="form" method="post" action="modiflecteur1.php">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			

		<p class="submit">
			<input type="submit" name="butt" value="valider" />
		</p>
	</form>

</body>
</html>