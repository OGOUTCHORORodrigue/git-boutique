<?php
require 'php/bdd.php';

$req = "SELECT * FROM client ";
$stmt = $bdd->prepare($req);
$stmt->execute();
$clients = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
    <link rel="stylesheet" href="assets/style2.css">
</head>

<body>
    <section>
        <nav>
            <ul>
                <li><a href="produits.php">Produit</a></li>
                <li><a href="categorie.php">Categorie</a></li>
                <li><a href="commande.php">Commande</a></li>
                <li><a href="client.php">Client</a></li>
            </ul>
        </nav>
    </section>
    <section class="container">
        <div class="new">
            <a href="form_ajouter_client.php">Nouveau</a>
        </div>
        <div class="box-produit">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>télephone</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) {  ?>
                        <tr>
                            <td><?= $client['nom'] ?></td>
                            <td><?= $client['prenom'] ?></td>
                            <td><?= $client['adresse'] ?></td>
                            <td><?= $client['telephone'] ?></td>
                            <td>
                                <div class="action">
                                    <a href="form_modifier_produit.php?ref_prod=<?= $client['nom'] ?>" class="modifier">Modifier</a>
                                    <a href="php/trt_supprimer_produit.php?ref_prod=<?= $client['nom'] ?>" class="supprimer">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </section>
</body>

</html>