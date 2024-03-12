<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<div class="inscription">
        <h2>Connexion</h2>
        <form action="traitement_connexion.php" method="post">
            <label style="margin-right: 600px;" for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label style="margin-right: 600px;" for="mot_de_passe">Mot de passe :</label><br>
            <input  type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
    </div>

</body>
</html>