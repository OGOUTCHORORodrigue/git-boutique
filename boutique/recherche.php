<?php
require 'php/bdd.php';
$req = "Select * from categorie";
$stmt = $bdd->prepare($req);
$stmt->execute();
$all_catrgory = $stmt->fetchAll();

$donnee = [];
if (isset($_POST['valider'])) {
    $id = $_POST['cat'];
    $requete = "SELECT * from produit WHERE code='$id'";
    $reponse = $bdd->query($requete);
    $donnee = $reponse->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <h2>Rechercher des produit par catégorie</h2>
    <div class="cadre">
        <form action="recherche.php" method="POST">
            <div class="group">
                <label for="cat">Selectionner une catégorie</label>
                <select name="cat" id="cat">
                    <?php foreach ($all_catrgory as $category) { ?>
                        <option value="<?= $category['code'] ?>"><?= $category['libelle'] ?></option>
                    <?php } ?>
                </select>
                <button name="valider" type="submit">Rechercher</button>
            </div>
            <?php foreach ($donnee as $produit) { ?>
                <div class="prod">
                
                        <img src="php/<?= $produit['imageprod'] ?>" alt="Image">
                        <h5><?= $produit['design'] ?></h5>
                        <h5><?= $produit['pu'] ?>F cfa</h5>
                        <button type="submit">Acheter</button>
                </div>
            <?php } ?>
        </form>
    </div>
</body>

</html>