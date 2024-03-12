
<?php

// Déclaration des variables
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=ProjetWaxangari', 'root', '');

// Préparation de la requête
$req = $bdd->prepare('SELECT * FROM Inscriptions WHERE email = :email');

// Exécution de la requête
$req->execute(array(
    ':email' => $email
));

// Récupération des données de l'utilisateur
$utilisateur = $req->fetch();

// Vérification du mot de passe
if (password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
    // Mot de passe correct
    session_start();
    $_SESSION['id_utilisateur'] = $utilisateur['id'];
    $_SESSION['nom'] = $utilisateur['nom'];
    $_SESSION['prenom'] = $utilisateur['prenom'];
    header('Location: index.php');
} else {
    // Mot de passe incorrect
    echo '<p>Mot de passe incorrect.</p>';
}

?>

