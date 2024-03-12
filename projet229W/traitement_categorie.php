<?php 

$nom = $_POST['nom'];

$bdd = new PDO('mysql:host=localhost;dbname=ProjetWaxangari', 'root', '');

$req = $bdd->prepare('INSERT INTO categorie (nom) VALUES (:nom)');

$req->execute(array(
    ':nom' => $nom,
));
header('Location: Ajout.php');

?>