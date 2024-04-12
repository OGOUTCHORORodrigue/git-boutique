<?php
    include('bdd.php');
    //recuperer les donnees
    $code = $_POST['code'];
    $libelle = $_POST['libelle'];
    

if (empty($code) || empty($libelle)) {
        echo "<script> alert('veillez remplir les champs')</script>";
    }else {
         {
            $req1 = "INSERT into categorie values ('$code','$libelle')";
            
            if ($bdd->query($req1)== true ) {
                echo "<script> alert('enregistrement effuctué avec succès ')</script>"; 
                header("Refresh:1, url=categorie.php");   
            }
        }
    }


?>