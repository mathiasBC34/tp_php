<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="./index.php">acceuil</a>

<form action="./form_insert.php" method="post"> 
        <label for="nom">Nom
        <input type="text" name="nom" id="nom"></label><br>

        <label for="console">Console
        <input type="text" name="console" id="console"></label> <br>
        
        <input type="submit" value="insert">
</form>

<?php
include "insert.php";

    if ($result) {
        $message = 'le jeu a été ajouté';
    }else{
        $message = 'échec de l"envoi';
    }
?>
</body>
</html>