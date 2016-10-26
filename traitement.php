<?php

// connexion à la BDD
include('connexion.php');
//réception des données
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$date= date('Y-m-d');
$message = $_POST['message'];
//print_r($_POST);
// préparation de la requete
$req="INSERT INTO `messages`( `nom`, `prenom`,`mail`,`date_message`, `message`) VALUES (:nom, :prenom,:mail,:date_message, :message)";
$res = $bdd->prepare($req);
$erreur =$res->execute(array('nom'=>$nom,
					  'prenom'=>$prenom,
					  'mail'=>$mail,
					  'date_message'=>$date,
					  'message'=>$message));
echo $erreur;
// Message en cas d' erreur
//si $erreur = 1 alors pas d'erreur / renvoi à la page d'accueil 
if($erreur==1){
	header('Location:formulaire_contact.php');
}
//sinon affiche message d'erreur
else{
	echo 'désolé erreur ';
} 

?>