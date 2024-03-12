<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Inscription</title>
</head>

<body>
    <div class="auth">
        <h2>Inscription</h2>
        <form action="traitement_inscription.php" method="post">
            <label style="margin-right: 600px;" for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label style="margin-right: 500px;" for="firstName">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label style="margin-right: 600px;" for="firstName">Téléphone:</label><br>
            <input type="number" id="phone" name="phone" required><br><br>

            <label style="margin-right: 600px;" for="adresse">Adresse :</label><br>
            <input type="text" id="adresse" name="adress" required><br><br>


            <label style="margin-right: 600px;" for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label style="margin-right: 600px;" for="mot_de_passe">Mot de passe :</label><br>
            <input  type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

            <input type="submit" value="S'inscrire">
        </form>
        <p style="margin-top: 50px;">Avez vous déjà un compte?</p> <a href="Connexion.php">Connexion</a>
    </div>


</body>

</html>