<?php
require 'php/bdd.php';
$req = "Select * from client";
$stmt = $bdd->prepare($req);
$stmt->execute();
$clients = $stmt->fetchAll();

$num_cli = $_GET['numcli'];

$req_select_cli_modif = "SELECT * FROM produit where ref = ?";
$stmt_cli_modif = $bdd->prepare($req_select_cli_modif);
$stmt_cli_modif->execute([$ref_prod]);
$client = $stmt_cli_modif->fetch();

if (!$client) {
    echo "<script>alert(Produit non retrouvé.')</script>";
    header("refresh:.2; url=../client.php");
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
            <form action="php/trt_modifier_clent.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="numcli">Numcli</label>
                    <input type="text" id="numcli" name="numcli" readonly value="<?= $client['numcli'] ?>">
                </div>
                <div class="input-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="desi" name="nom" required value="<?= $client['nom'] ?>">
                </div>
                <div class="input-group">
                    <label for="prenom">Prenom</label>
                    <input type="prenom" id="prenom" name="prenom" required value="<?= $client['prenom'] ?>">
                </div>
                <div class="input-group">
                    <label for="adrresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" required value="<?= $client['adresse'] ?>">
                </div>
                <div class="input-group">
                    <label for="telephone">Telephone</label>
                    <input type="telephone" id="telephone" name="telephone" required value="<?= $client['telephone'] ?>">
                </div>


                

                <div class="input-group btn">
                    <button type="submit">Valider l'ajout</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>