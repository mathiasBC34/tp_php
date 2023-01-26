<?php
include './connection/connection_bdd.php';
// Récupération du paramètre GET
$id = $_GET['id'];
$statement = $pdo->query("SELECT * FROM mes_jeux WHERE id = " . $id);
// Récupère le résultat
$result = $statement->fetch(PDO::FETCH_ASSOC);
// Affichage
echo 'Mon jeu numéro : '. $result['id'];
echo '<br>';
echo 'Nom : ' . $result['nom'];
echo '<br>';
echo 'Sur console : '. $result['console'];