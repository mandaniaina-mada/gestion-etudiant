<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req= $bdd->prepare('INSERT INTO eleve(el_nom, el_prenom, el_ddn, el_adressemail, el_diplome, el_opt) VALUES(:nom, :prenom, :dates, :email, :diplome, :options)');
$req->execute (array(
    'nom' => htmlspecialchars($_POST['nom']),
    'prenom' => htmlspecialchars($_POST['prenom']),
    'dates' => htmlspecialchars($_POST['dates']),
    'email' => htmlspecialchars($_POST['email']),
    'diplome' => htmlspecialchars($_POST['diplome']),
    'options' => htmlspecialchars($_POST['options']),
));
?>