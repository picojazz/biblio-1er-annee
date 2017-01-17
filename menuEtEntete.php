<?php require_once('connexion.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="entete">
					<h1><a href="accueil.php">Picojazz Bibliotheque</a></h1>
</div>
<?php if($_SESSION['privilege'] == "administrateur") { ?>
<div class="menu">
	<ul id="menu">
	<li><a href="accueil.php">Accueil</a>
		
	</li><li><a href="livre.php">Livre</a>
		<ul>
			<li><a href="ajoutlivre.php">Ajouter</a></li>
			<li><a href="modiflivre.php">Modifier</a></li>
			<li><a href="supplivre.php">Supprimer</a></li>
		</ul>
	</li><li><a href="lecteur.php">Lecteur</a>
		<ul>
			<li><a href="ajoutlecteur.php">Ajouter</a></li>
			<li><a href="modiflecteur.php">Modifier</a></li>
			<li><a href="supplecteur.php">Supprimer</a></li>
		</ul>
	</li><li><a href="emprunt.php">Emprunt</a>
		<ul>
			<li><a href="ajoutEmprunt.php">Ajouter</a></li>
			<li><a href="modifemprunt.php">Modifier</a></li>
			<li><a href="suppEmprunt.php">Supprimer</a></li>
		</ul>
	</li><li><a href="toutvoir.php">Tout Voir</a>
		
	</li><li><a href="index.php?erreur=logout">Deconnexion</a>
		
	</li>
</ul>
</div>
<?php } ?>

<?php if($_SESSION['privilege'] == "utilisateur") { ?>
<div class="menu1">
	<ul id="menu">
	<li><a href="accueil.php">Accueil</a>
		
	</li><li><a href="livre.php">Livre</a>
		
	</li><li><a href="emprunt.php">Liste Emprunts</a>
		
	</li><li><a href="ajoutEmprunt.php">Passer Emprunt</a>
		
	</li><li><a href="toutvoir.php">Tout Voir</a>
		
	</li><li><a href="index.php?erreur=logout">Deconnexion</a>
		
	</li>
</ul>
</div>
<?php } ?>
</body>
</html>