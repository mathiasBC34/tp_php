<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le jeux</title>
    <style>
        .detaile,
        .supp,
        .up{
            text-decoration:none;
            margin-right: 15px;
        }

        input {
            margin: 5px 5px 15px;
        }
        .nave {
            font-size: 2rem;
        }
        .detaile{
            color: blue;
        }
        .up{
            color: green;
        }
        .supp{
            color: red;
        }
    </style>
</head>

<body>
    <a class="nave" href="./form_insert.php">insertion</a>
    <a class="nave" href="byConsole.php?console=ps4">Tous les jeux PS4</a>

    <?php
    include "connection/connection_bdd.php";
    


    $statement = $pdo->query("SELECT * FROM mes_jeux");
    $result = $statement->fetchALL(PDO::FETCH_ASSOC);

    //-------------------------- boucle foreach------------------>
    foreach ($result as $key => $value) {
        echo "<li>" . $value['nom'] . " " . $value['console'] . "</li>";
    ?> <a class="detaile" href="showOne.php?id=<?= $value['id'] ?>">Voir ce jeu en détail</a>
     <a class="up" href="update.php?id=<?= $value['id'] ?>">mettre a jour</a>
     <a class="supp" href="delete.php?id=<?= $value['id'] ?>">supprimer</a>
     

    <?php
    };

    ?><br><br>
    

</body>

</html>