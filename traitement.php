<?php

// connexion à la BDD
include('connexion.php');
//réception des données
$nom = $POST['nom']
$prenom = $POST['prenom'];
$mail = $POST[''];
$message = $POST[''];
//print_r($_POST);
// préparation de la requete
$req="INSERT INTO `messages`( `nom`, `prenom`,`mail`, `message`) VALUES (:nom, :prenom, :message)";
$res = execute(array('nom'=>$nom,
					  'prenom'=>$prenom,
					  'mail'=>$mail,
					  'message'=>$message));
echo $res;
// Message en cas d' erreur


?>