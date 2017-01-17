<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
	header("Location:index.php?erreur=intru");
}
if(isset($_POST['enreg'])){
	$req1="INSERT INTO lecteur SET Id='".$_POST['Id']."',password='".$_POST['password']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',age='".$_POST['age']."',sexe='".$_POST['sexe']."',niveauDetude='".$_POST['niveau']."',email='".$_POST['email']."',ville='".$_POST['ville']."'";
	$resultat1=mysql_query($req1);
	$req2="INSERT INTO user SET Id='".$_POST['Id']."',password='".$_POST['password']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',privilege='utilisateur'";
	$resultat2=mysql_query($req2);
    header("location:lecteur.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ajout lecteur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Ajout d'un lecteur</p>
<form class="form" method="post">
		
		    <label>Id</label>
			<input type="text" name="Id"  />
			<label>mot de pass</label>
			<input type="password" name="password"  />
			<label>prenom</label>
			<input type="text" name="prenom"  />
			<label>nom</label>
			<input type="text" name="nom"  />
			<label>age</label>
			<input type="text" name="age"  /><br>
			<label>sexe</label>
			<select name="sexe"><option value="masculin">Masculin</option>
	<option value="feminin">Feminin</option></select><br><br>
			<label>niveau d'etude</label>
			<input type="text" name="niveau"  />
			<label>email</label>
			<input type="text" name="email"  />
			<label>ville</label>
			<input type="text" name="ville"  />
		

		<p class="submit">
			<input type="submit" name="enreg" value="enregistrer" />
		</p>
	</form>

</body>
</html>