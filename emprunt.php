<?php require_once('connexion.php'); ?>
<?php

session_start();
if ($_SESSION['Id'] =="" && $_SESSION['password'] =="") {
  header("Location:index.php?erreur=intru");
}
if (isset($_GET['cle'])) {
$req="SELECT * FROM emprunt WHERE nomLivre LIKE '%".$_GET['cle']."%' ";
$resultat=mysql_query($req);

}
else{
$req="SELECT * FROM emprunt";
$resultat=mysql_query($req); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>emprunt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'menuEtEntete.php'; ?>
<div class="recherche">
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label> recherche des emprunt  par le nom du livre</label>
<input type="text" name="cle" value ="<?php if(isset($_GET['cle'])) echo $_GET['cle'];?>">
<input type="submit" name="button" value="envoyer">
</form>
</div>
<p class="titrepage"> Liste Des Emprunts</p>
<div class="tableau">
	<table class="flat-table">
  <tbody>
    <tr>
      <th>id</th>
      <th>Date Emprunt</th>
      <th>Delai</th>
      <th>Date rendu</th>
      <th>Nom livre</th>
      <th>nom lecteur</th>
      
    </tr>
    <tr>
    <?php while ($recup=mysql_fetch_array($resultat)){ ?>
      <td><?php echo $recup['id'];?></td>
      <td><?php echo $recup['dateEmp'];?></td>
      <td><?php echo $recup['delai'];?></td>
      <td><?php echo $recup['dateRendu'];?></td>
      <td><?php echo $recup['nomLivre'];?></td>
      <td><?php echo $recup['nomLecteur'];?></td>
      

    </tr>
    <?php } ?>
  </tbody>
  </table>
</div>
</body>
</html>