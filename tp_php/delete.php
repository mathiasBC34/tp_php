<?php


include "./connection/connection_bdd.php";



if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM mes_jeux WHERE id = :id";
    $q = array('id' => $id);
    $req = $pdo -> prepare($sql);
    $req -> execute($q);
    header('Location:index.php');
   }

   if ($req->execute($q)) {
    echo "le code est supp";
}else{
    echo "le code pas supp";
}