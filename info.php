<?php require_once('connexion.php'); ?>
<?php

//inscription
if(isset($_POST['inscription'])){
	$req1="INSERT INTO user SET Id='".$_POST['Id']."',password='".$_POST['pass']."',nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',privilege='utilisateur'";
	$resultat1=mysql_query($req1);
    $req="SELECT nom,prenom,Id,password FROM user WHERE Id='".$_POST['Id']."'";
}

    $resultat=mysql_query($req);
	$recup=mysql_fetch_array($resultat);
    
if(isset($_POST['info'])){
	$req2="INSERT INTO lecteur SET password='".$_POST['pass1']."',nom='".$_POST['nom1']."',prenom='".$_POST['prenom1']."',niveauDetude='".$_POST['niveau']."',email='".$_POST['email']."',age='".$_POST['age']."',ville='".$_POST['ville']."',sexe='".$_POST['sexe']."',Id='".$_POST['id1']."'";
	$resultat2=mysql_query($req2);
    header("location:index.php?sign=ok");
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'Entete.php'; ?>
<p class="titrepage"> Saisie des informations personnels</p> 
<form class="form" method="post">
		     
		     <!--<label>Mot de Passe</label>
			<br/>-->
			<input type="hidden" name="pass1" required="true" value="<?php echo $recup['password'];?>">
			<br/>
		    <label>Id</label>
			<input type="hidden" name="id1" required="true" value="<?php echo $recup['Id'];?>" /><?php echo $recup['Id'];?><br>
			<label>Nom</label>
			<input type="hidden" name="nom1" required="true" value="<?php echo $recup['nom'];?>" /> <?php echo $recup['nom'];?>
			<label>Prenom</label>
			<input type="hidden" name="prenom1" required="true" value="<?php echo $recup['prenom'];?>" /> <?php echo $recup['prenom'];?><br>
			<label>Age</label>
			<input type="text" name="age" required="true" /><br>
			<label>Sexe</label>
			<select name="sexe"><option value="masculin">Masculin</option>
	<option value="feminin">Feminin</option></select><br><br>
			<label>Niveau D'etudes</label>
			<input type="text" name="niveau" required="true" />
			<label>Ville</label>
			<input type="text" name="ville" required="true" />
			<label>email</label>
			<input type="text" name="email" required="true" />
			
		

		<p class="submit">
			<input type="submit" name="info" value="enregistrer" />
		</p>
	</form>

</body>
</html>