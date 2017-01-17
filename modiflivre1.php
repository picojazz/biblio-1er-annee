<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['butt'])){
	$req="SELECT * FROM livre WHERE Id='".$_POST['Id']."'";
	$resultat=mysql_query($req);
	$recup=mysql_fetch_array($resultat);}
if(isset($_POST['but'])){
	$req1="UPDATE livre SET nomLivre='".$_POST['nom']."',auteur='".$_POST['auteur']."',prix='".$_POST['prix']."',dateEdit='".$_POST['dateEdit']."',datePub='".$_POST['datePub']."' WHERE Id='".$_POST['Id']."'";
	$resultat1=mysql_query($req1);
    header("location:livre.php");
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

<form class="form" method="post">
		
		    <label>Id</label>
			<input type="hidden" name="Id" value="<?php echo $recup['Id'];?>" /><?php echo $recup['Id'];?><br>
			<label>Nom</label>
			<input type="text" name="nom" value="<?php echo $recup['nomLivre'];?>" />
			<label>Auteur</label>
			<input type="text" name="auteur" value="<?php echo $recup['auteur'];?>" />
			<label>Prix</label>
			<input type="text" name="prix" value="<?php echo $recup['prix'];?>" />
			<label>Date D'édition</label>
			<input type="date" name="dateEdit" value="<?php echo $recup['dateEdit'];?>" />
			<label>Date de pub</label>
			<input type="date" name="datePub" value="<?php echo $recup['datePub'];?>" />
			
		

		<p class="submit">
			<input type="submit" name="but" value="enregistrer" />
		</p>
	</form>
	
</body>
</html>