<?php

include "./connection/connection_bdd.php";

// Mes variables récupérer en GET ou POST
    $nom = "";
    $console = "";

    // Préparation
    $statement = $pdo->prepare("INSERT INTO mes_jeux(nom, console) VALUES (:nom, :console);"
    );
    // Correspondre les valeurs
    $statement->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $statement->bindValue(':console',$_POST['console'], PDO::PARAM_STR);
    $result = $statement->execute();
   