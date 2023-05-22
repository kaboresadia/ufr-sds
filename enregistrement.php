<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_de_naissance=$_POST['date_de_naissance'];
$genre=$_POST['genre'];
$date_d_adhesion=$_POST['date_d_adhesion'];
$personne_a_prevenir=$_POST['personne_a_prevenir'];

include('connexion.php');
$reponse=$bdd->query("INSERT INTO `etudiant`( `nom`, `prenom`, `date_de_naissance`, `genre`, `date_d_adhesion`, `personne_a_prevenir`) VALUES ('$nom','$prenom','$date_de_naissance','$genre','$date_d_adhesion','$personne_a_prevenir')");
$reponse->closeCursor();

echo('Enregistrement effectué avec succès!');

?>