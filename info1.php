<?php

$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant', 'root', '');

$requete="select * from eleve where el_id = '$'";
		$resultats=$bdd->query($requete);
		$ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
		while($ligne) {
			echo "<table><tr><td>".$ligne->el_id."<td>".$ligne->el_nom."<td>".$ligne->el_prenom."<td>".$ligne->el_ddn."<td>".$ligne->el_adressemail."<td>".$ligne->el_diplome."<td>".$ligne->el_opt."</td></tr></table>";
			$ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
					}

?>

<form method="post" action="register1.php">
<ul>
	<li><a href='accueil1.php'> Accueil</a></li>
    <li><a href='register2.php'> S'inscrire</a></li>
    <li><a href='filtre1.php'> Filtrage des élèves </a></li>
    <li><a href='info1.php'> Information sur un élèves </a></li>
    <li><a href='listefinal1.php'> Listes des élèves </a></li>
</ul>
<h1><span>Changer les données de l'étudiants : </span></h1>"
<link rel="stylesheet" type="text/css" href="style.css">