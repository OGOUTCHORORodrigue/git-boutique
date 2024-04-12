<?php
require 'php/bdd.php';
$req = "Select * from categorie";
$stmt = $bdd->prepare($req);
$stmt->execute();
$all_catrgorie = $stmt->fetchAll();

$code_cat = $_GET['code'];

$req1 = "SELECT * FROM categorie where code = ?";
$stmt_cat_modif = $bdd->prepare($req1);
$stmt_cat_modif->execute([$code_cat]);
$categorie = $stmt_cat_modif->fetch();

if (!$categorie) {
    echo "<script>alert(Produit non retrouvé.')</script>";
    header("refresh:.2; url=../php/trt_modifier_categorie.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <section class="container " style="height: auto !important;">
        <div class="box">
            <form action="php/trt_modifier_categorie.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="code">code</label>
                    <input type="text" id="code" name="code" readonly value="<?= $categorie['code'] ?>">
                </div>
                <div class="input-group">
                    <label for="design">Designation</label>
                    <input type="text" id="libelle" name="libelle" required value="<?= $categorie['libelle'] ?>">
                </div>
               

                <div class="input-group btn">
                    <button type="submit">Valider l'ajout</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>