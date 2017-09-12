<?php // démarrage SESSION
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h2>Nouveau contact</h2>
    <form method="post" action="libs/contactManager.php?action=new">
        <label for="nomEmploye">Nom :</label><br>
        <input type="text" id="nomEmploye" name="nomEmploye"><br>

        <label for="prenomEmploye">Prénom :</label><br>
        <input type="text" id="prenomEmploye" name="prenomEmploye"><br>

        <label for="genre">genre</label>
        <select id="genre" name="hommeFemme">
            <option value="0">-- Choisir --</option>
            <option value="1">Homme</option>
            <option value="2">Femme</option>
        </select><br>

        <input type="submit" value="Ajouter"><br>

    </form>
    <?php
    if (isset($_SESSION['error'])){
        echo "<strong>".$_SESSION['error']."</strong>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['message'])){
        echo "<strong>".$_SESSION['message']."</strong>";
        unset($_SESSION['message']);
    }
    ?>
</body>
</html>
