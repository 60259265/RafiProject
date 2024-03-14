<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername = "localhost";
$dbname = "ProjetWaxangari";
$user = "root";
$password = "";

try {
    $bdd = new PDO ("mysql:host=$servername; dbname=$dbname; charset=utf8", "$user", "$password");
} catch (Exception $e) {
    echo "Erreur : ".$e->getmessage();
}

  $nom = htmlspecialchars($_POST['nom']);
  $prix = htmlspecialchars($_POST['prix']);
  $categorie = htmlspecialchars($_POST['id_categorie']);
  $disponiblite = htmlspecialchars($_POST['disponiblite']);

  if (isset($nom, $prix,$categorie,$disponiblite) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['disponiblite'])) {

    // VERIFIONS SI L'ARTICLE EXISTE DEJA
    $reqSelect = $bdd->prepare('SELECT count(*) as count FROM articles WHERE nom = ?');
    $reqSelect->execute(array($nom));
    $resultat = $reqSelect->fetch();

    if ($resultat['count'] > 0) {
      echo "L'article entrer existe déjà.";
    } else {
      if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        // verifion la taille du fichier à 2mo
        if ($_FILES['image']['size'] <= 2000000) {
          $fileinfo = pathinfo($_FILES['image']['name']);
          $extension = $fileinfo['extension'];
          $extension_autorisees = array('jpg', 'jpeg', 'png');
          if (in_array($extension, $extension_autorisees)) {

            // on ajoute le ficher dans le dossier 
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
            $filename = 'uploads/' . basename($_FILES['image']['name']);

            $sql = "INSERT INTO articles(image, nom, prix, id_categorie, disponibilite, date_publication) VALUES (?, ?, ?, ?, ?, now())";
             $req = $bdd->prepare($sql);
            $req->execute(array($filename, $nom, $prix, $categorie, $disponiblite));
            
             echo "Publication réussie!";
          } else {
            echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
          }
        } else {
          echo 'L\'image ne doit pas dépasser 2Mo.';
        }
      } else {
        echo 'Impossible d\'ajouter le fichier.';
      }
    }

  } else {
    echo "Remplissez tout les champs.";
  }
?>
