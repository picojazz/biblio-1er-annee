<?php require_once('connexion.php'); ?> 
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['butt'])){
	$req="SELECT * FROM lecteur WHERE Id='".$_POST['Id']."'";
	$resultat=mysql_query($req);
	$recup=mysql_fetch_array($resultat);
}

if(isset($_POST['but'])){
	$req1="UPDATE lecteur SET password='".$_POST['password']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',age='".$_POST['age']."',sexe='".$_POST['sexe']."',niveauDetude='".$_POST['niveau']."',email='".$_POST['email']."',ville='".$_POST['ville']."' WHERE Id='".$_POST['Id']."'";
	$resultat1=mysql_query($req1);

	$req2="UPDATE user SET password='".$_POST['password']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."' WHERE Id='".$_POST['Id']."'";
	$resultat2=mysql_query($req2);
    header("location:lecteur.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>modification d'un lecteur</title>
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Modification d'un lecteur</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="hidden" name="Id" value="<?php echo $recup['Id'];?>" /><?php echo $recup['Id'];?>
			<br>
			<label>mot de pass</label>
			<input type="text" name="password" value="<?php echo $recup['password'];?>" />
			<label>prenom</label>
			<input type="text" name="prenom" value="<?php echo $recup['prenom'];?>" />
			<label>nom</label>
			<input type="text" name="nom"value="<?php echo $recup['nom'];?>"  />
			<label>age</label>
			<input type="text" name="age" value="<?php echo $recup['age'];?>" /><br>
			<label>sexe</label>
			<select name="sexe" value="<?php echo $recup['sexe'];?>"><option value="masculin">Masculin</option>
	<option value="feminin">Feminin</option></select><br><br>
			<label>niveau d'etude</label>
			<input type="text" name="niveau" value="<?php echo $recup['niveauDetude'];?>" />
			<label>email</label>
			<input type="text" name="email" value="<?php echo $recup['email'];?>" />
			<label>ville</label>
			<input type="text" name="ville" value="<?php echo $recup['ville'];?>" />
		

		<p class="submit">
			<input type="submit" name="but" value="enregistrer" />
		</p>
	</form>
</body>
</html>