<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['enreg'])){
	$req1="INSERT INTO livre SET Id='".$_POST['Id']."',nomLivre='".$_POST['nom']."',auteur='".$_POST['auteur']."',prix='".$_POST['prix']."',dateEdit='".$_POST['dateEdit']."',datePub='".$_POST['datePub']."'";
	$resultat1=mysql_query($req1);
    header("location:livre.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ajout</title>
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Ajout d'un livre</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			<label>Nom</label>
			<input type="text" name="nom"  />
			<label>Auteur</label>
			<input type="text" name="auteur"  />
			<label>Prix</label>
			<input type="text" name="prix"  />
			<label>Date D'édition</label>
			<input type="date" name="dateEdit"  />
			<label>Date de pub</label>
			<input type="date" name="datePub"  />
			
		

		<p class="submit">
			<input type="submit" name="enreg" value="enregistrer" />
		</p>
	</form>

</body>
</html>