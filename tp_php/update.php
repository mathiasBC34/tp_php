<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modif du jeu</title>
</head>

<body>

    <a href="index.php">accueil</a>

    <?php

    include "./connection/connection_bdd.php";

    $id = (int)$_GET['id'];

    $change = "SELECT * FROM mes_jeux";
    $statement = $pdo->query($change);

    $result = $statement->fetchAll();


    foreach ($result as $game) 
    {
        if ($game['id'] == $id) 
        {
            $nom = $game['nom'];
            $console = $game['console'];
        }
    }
    
    ?>

    <form action="" method="post">
        <label for="nom">change nom</label><br>
        <input type="text" name="nom" id="nom" value="<?= $nom; ?>"><br>

        <label for="console">change console</label><br>
        <input type="text" name="console" id="console" value="<?= $console; ?>"><br>
        <input type="submit" value="appuis change">
    </form>

    <?php 

    $majNom = filter_input(INPUT_POST, 'nom');
    $majConsole = filter_input(INPUT_POST, 'Console');

    if (isset($majNom) && !empty($majNom) && isset($majConsole) && !empty($majConsole))
    {
        $statement = $pdo->prepare("UPDATE mes_jeux SET nom = :nom, console = :console WHERE id= :id");

        $statement->bindParam(':console', $majConsole, PDO::PARAM_STR);
        $statement->bindParam(':nom', $majNom, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $resultUpdate = $statement->execute();
        echo "le jeu $majNom et mis à jours";
    }else{
        echo "modifie un champs stp";
    }


    ?>
</body>

</html>