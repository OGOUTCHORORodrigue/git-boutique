<?php
    require 'php/bdd.php';
    $req = "Select * from client";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $clients = $stmt->fetchAll();
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
            <form  action="php/trt_ajout_client.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="ref">Nom</label>
                    <input type="text" id="nom" name="s_nom" required>
                </div>
                <div class="input-group">
                    <label for="ref">Prénom</label>
                    <input type="text" id="prenom" name="s_prenom" required>
                </div>
                <div class="input-group">
                    <label for="ref">Adresse</label>
                    <input type="text" id="adresse" name="s_adresse" required>
                </div>
                <div class="input-group">
                    <label for="design">telephone</label>
                    <input type="text" id="telephone" name="telephone" required>
                </div>
                

                

                <div class="input-group btn">
                    <button type="submit">Valider l'ajout</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>