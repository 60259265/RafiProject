<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link rel="stylesheet" href="styleInscription.css style.css">

</head>
<body>
    <h1>Ajouter un article</h1>

    <form action="traitement_ajout.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="formFileMultiple" class="form-label">Photos</label><br>
  <input class="form-control" type="file" id="formFileMultiple" name="image"><br><br>
</div>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        <br>
        <label for="prix">Prix</label><br>
        <input type="text" id="prix" name="prix" required><br><br>
        <br>
        <label for="id_categorie" >Catégorie</label><br>
        <select name="id_categorie">
            <option selected>chosissez la categorie</option>
            <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=ProjetWaxangari', 'root', '');
            $reqData = $bdd->prepare('SELECT * FROM articles');
            $reqData->execute();

            while ($datacat = $reqData->fetch()) {
                ?>
                <option value="<?= $datacat['id'] ?>"><?= $datacat['nom'] ?></option>
                <?php
            }
            ?>
        </select><br><br>
       
            <label for="disponiblite">Disponiblité</label><br>
        <textarea id="disponiblite" name="disponiblite" required></textarea><br><br>
        <br>
        <input type="submit" value="Ajouter" name="ok">
    </form>

            
        
        <br>

       
</body>
</html>
