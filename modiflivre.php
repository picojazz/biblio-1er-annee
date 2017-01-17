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
	<title>modifier</title>
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Modification d'un livre</p>
<form class="form" method="post" action="modiflivre1.php">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			

		<p class="submit">
			<input type="submit" name="butt" value="valider" />
		</p>
	</form>

</body>
</html>