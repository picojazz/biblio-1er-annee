<?php require_once('connexion.php'); ?>
<?php

session_start();

if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
  header("Location:index.php?erreur=intru");
}
if (isset($_GET['cle'])) {
$req="SELECT * FROM lecteur WHERE Id LIKE '%".$_GET['cle']."%' ";
$resultat=mysql_query($req);

}else{
$req="SELECT * FROM lecteur";
$resultat=mysql_query($req);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>lecteur</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="recherche">
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label> recherche de lecteur par ID </label>
<input type="text" name="cle" value ="<?php if(isset($_GET['cle'])) echo $_GET['cle'];?>">
<input type="submit" name="button" value="envoyer">
</form>
</div>
<?php include 'menuEtEntete.php'; ?>
<p class="titrepage"> Liste Des Lecteurs</p>
<div class="tableau">
	<table class="flat-table">
  <tbody>
    <tr>
      <th>id</th>
      <th>Prenom</th>
      <th>Nom</th>
      <th>Age</th>
      <th>Sexe</th>
      <th>Niveau d'etudes</th>
      <th>Email</th>
      <th>Ville</th>
    </tr>
    <tr>
    <?php while ($recup=mysql_fetch_array($resultat)){ ?>
      <td><?php echo $recup['Id'];?></td>
      <td><?php echo $recup['prenom'];?></td>
      <td><?php echo $recup['nom'];?></td>
      <td><?php echo $recup['age'];?></td>
      <td><?php echo $recup['sexe'];?></td>
      <td><?php echo $recup['niveauDetude'];?></td>
      <td><?php echo $recup['email'];?></td>
      <td><?php echo $recup['ville'];?></td>
      

    </tr>
    <?php } ?>
  </tbody>
  </table>
</div>
</body>
</html>