<?php

// Déclaration des variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];
$telephone= $_POST['phone'];
$adresse= $_POST['adress'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=ProjetWaxangari', 'root', '');

// Hachage du mot de passe
$mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Préparation de la requête
$req = $bdd->prepare('INSERT INTO Inscriptions (nom, prenom, email, telephone, adress, mot_de_passe) VALUES (:nom, :prenom, :email, :telephone, :adress, :mot_de_passe)');

// Exécution de la requête
$req->execute(array(
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':email' => $email,
	':telephone' => $telephone,
	':adress' => $adresse,
    ':mot_de_passe' => $mot_de_passe_hache
));

// Redirection vers la page de confirmation
header('Location: confirmation.php');

?>



