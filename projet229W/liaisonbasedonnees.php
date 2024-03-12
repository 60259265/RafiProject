<?php
// informations de connexion à la base de données
$serveur = "localhost"; // Le nom du serveur MySQL
$utilisateur = "root"; // Votre nom d'utilisateur MySQL
$mot_de_passe = ""; // Votre mot de passe MySQL
$nom_base_de_donnees = "ProjetWaxangari"; // Nom de votre base de données

// Connexion à MySQL
$connexion = mysqli_connect($localhost, $root, "", $ProjetWaxangari,);

// Vérification de la connexion

if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}else{
    echo "okkkkk";
}
?>