
<?php

error_reporting("E_ALL");
ini_set("display_errors", 1);

$bdd = new PDO('mysql:host=localhost;dbname=ProjetWaxangari', 'root', '');


  $nom = htmlspecialchars($_POST['nom']);
  $prix = htmlspecialchars($_POST['prix']);
  $categorie = htmlspecialchars($_POST['id_categorie']); // Assuming the form sends id_categorie
  $disponiblite = htmlspecialchars($_POST['disponiblite']);

  if (!empty($nom) && !empty($prix) && !empty($categorie) && !empty($disponiblite)) {
    // Check if article exists (same logic as before)
    $reqSelect = $bdd->prepare('SELECT count(*) as count FROM Articles WHERE nom = ? ');
    $reqSelect->execute(array($nom));
    $resultat = $reqSelect->fetch();

    if ($resultat['count'] > 0) {
      echo "L'article existe déjà.";
    } else {
      if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Handle single image upload for now
        if ($_FILES['image']['size'] <= 2000000) {
          $fileinfo = pathinfo($_FILES['image']['name']);
          $extension = $fileinfo['extension'];
          $extension_autorisees = array('jpg', 'jpeg', 'png');

          if (in_array($extension, $extension_autorisees)) {
            $filename = 'upload/' . basename($_FILES['image']['name']);

            $sql = "INSERT INTO Articles(image, nom, prix, id_categorie, disponibilite, date_publication) VALUES (?, ?, ?, ?, ?, now())";
            $req = $bdd->prepare($sql);
            $req->execute(array($filename, $nom, $prix, $categorie, $disponiblite));

            echo "Publication réussie!";
            // Handle image upload (move_uploaded_file)
          } else {
            echo "Le fichier n'est pas de type image : jpg, jpeg et png.";
          }
        } else {
          echo "L'image ne doit pas dépasser 2Mo!";
        }
      }
    }
  } else {
    echo "Remplissez tout les champs!";
  }


?>









       































