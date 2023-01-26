<?php
$dsn = "mysql:host=localhost;   
        dbname=ma_collection_jeux;
        charset=UTF8"; //chemin de ma base de donner

$username = "root"; //A changer si besoin
$password = "";//A changer si besoin

try {
    $pdo = new PDO($dsn, $username, $password,array(PDO::ATTR_PERSISTENT =>12));
} catch (PDOException $e) {
    echo "erreur a la connection de la base de donnée<br>";
    die($e->getMessage());
}





