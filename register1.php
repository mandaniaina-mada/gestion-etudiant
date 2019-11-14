<?php

$username = htmlentities(trim($_POST['username'])); //enleve tous les caractere speciaux, declaration des variables
$password = htmlentities(trim($_POST['password']));
$repeatpassword = htmlentities(trim($_POST['repeatpassword']));
if ($password==$repeatpassword) { 
	# code...
	$password = md5($password);
	$connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
	mysqli_select_db($connect,"gestion_etudiant");  //connexion à la base
	$req="INSERT INTO login(lo_username,lo_password) values ('$username','$password')";  //requete SQL insertion 
	mysqli_query($connect,$req);
} else echo "les 2 passwords ne sont pas identiques";
?>