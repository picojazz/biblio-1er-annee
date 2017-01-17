<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
  header("Location:index.php?erreur=intru");
}
if (isset($_GET['cle'])) {
$req="SELECT * FROM livre WHERE nomLivre LIKE '%".$_GET['cle']."%' ";
$resultat=mysql_query($req);

}
else{
$req="SELECT * FROM livre";
$resultat=mysql_query($req);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>livre</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<div class="recherche">
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label> recherche de livres </label>
<input type="text" name="cle" value ="<?php if(isset($_GET['cle'])) echo $_GET['cle'];?>">
<input type="submit" name="button" value="envoyer">
</form>
</div>
<p class="titrepage"> Liste Des Livres</p>
<div class="tableau">
	<table class="flat-table">
  <tbody>
    <tr>
      <th>id</th>
      <th>Nom du Livre</th>
      <th>Auteur</th>
      <th>Prix </th>
      <th>Date D'edition</th>
      <th>Date De Publication</th>
      <th>details</th>
    </tr>
    <tr>
    <?php while ($recup=mysql_fetch_array($resultat)){ ?>
      <td><?php echo $recup['Id'];?></td>
      <td><?php echo $recup['nomLivre'];?></td>
      <td><?php echo $recup['auteur'];?></td>
      <td><?php echo $recup['prix'];?></td>
      <td><?php echo $recup['dateEdit'];?></td>
      <td><?php echo $recup['datePub'];?></td>
      <td><a href="#">voir</a></td>

    </tr>
    <?php } ?>
  </tbody>
  </table>
</div>

</body>
</html>