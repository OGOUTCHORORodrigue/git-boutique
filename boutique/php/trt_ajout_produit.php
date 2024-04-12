<?php
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Inclure la connexion à la base de données
    include('bdd.php');

    // Récupérer les données du formulaire
    $ref = $_POST['ref']; // Référence du produit
    $design = $_POST['design']; // Désignation du produit
    $pu = $_POST['pu']; // Prix unitaire du produit
    $cat = $_POST['cat']; // Catégorie du produit
    $fileName = basename($_FILES["img"]["name"]); // Nom du fichier téléchargé

    // Gérer le téléchargement de l'image
    $dossier =  "uploads/"; // Répertoire de destination pour les images téléchargées

    $chemin = $dossier . $fileName; // Chemin complet du fichier sur le serveur
    $fileType = pathinfo($chemin, PATHINFO_EXTENSION); // Type de fichier téléchargé

    // Vérifier si le fichier est une image réelle
    $LesTypes = array('jpg', 'png', 'jpeg', 'gif'); // Types de fichiers d'images autorisés
    if (in_array($fileType, $LesTypes)) {
        // Télécharger l'image sur le serveur
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $chemin)) {
            // Insertion des données dans la table produit
            $query = "INSERT INTO produit (ref, design, pu, imageprod, code) VALUES (?, ?, ?, ?, ?)";
            $stmt = $bdd->prepare($query);
            $stmt->execute([$ref, $design, $pu, $chemin, $cat]);

            // Redirection après l'insertion
            echo "<script>alert('insertion, éffectué.')</script>";
            header("refresh:.5; url=../produits.php");
            exit();
        } else {
            echo "<script>alert('Désolé, une erreur s'est produite lors du téléchargement de votre fichier.')</script>";
            header("refresh:.5; url=../produits.php");
        }
    } else {
        echo "<script>alert('Désolé, seuls les fichiers de type JPG, JPEG, PNG et GIF sont autorisés.')</script>";
        header("refresh:.5; url=../produits.php");
    }
} else {
    // Redirection si le formulaire n'est pas soumis
    echo "<script>alert('le formulaire n'est pas soumis')</script>";
    header("refresh:.5; url=../produits.php");
    exit();
}
