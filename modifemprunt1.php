<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['butt'])){
	$req="SELECT * FROM emprunt WHERE id='".$_POST['Id']."'";
	$resultat=mysql_query($req);
	$recup=mysql_fetch_array($resultat);}
if(isset($_POST['but'])){
	$req1="UPDATE emprunt SET dateEmp='".$_POST['dateEmp']."',delai='".$_POST['delai']."',dateRendu='".$_POST['dateRendu']."',nomLivre='".$_POST['nomLivre']."',nomLecteur='".$_POST['nomLecteur']."' WHERE id='".$_POST['Id']."'";
	$resultat1=mysql_query($req1);
    header("location:emprunt.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>modifier</title>
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Modification d'un emprunt</p>

<form class="form" method="post">
		
		    <label>Id</label>
			<input type="hidden" name="Id" value="<?php echo $recup['id'];?>" /><?php echo $recup['id'];?><br>
			<label>date emprunt</label>
			<input type="date" name="dateEmp" value="<?php echo $recup['dateEmp'];?>" />
			<label>delai</label>
			<input type="text" name="delai" value="<?php echo $recup['delai'];?>" />
			<label>dateRendu</label>
			<input type="date" name="dateRendu" value="<?php echo $recup['dateRendu'];?>" />
			<label>Nom du livre</label>
			<input type="text" name="nomLivre" value="<?php echo $recup['nomLivre'];?>" />
			<label>Nom lecteur</label>
			<input type="text" name="nomLecteur" value="<?php echo $recup['nomLecteur'];?>" />
			
		

		<p class="submit">
			<input type="submit" name="but" value="enregistrer" />
		</p>
	</form>
	
</body>
</html>