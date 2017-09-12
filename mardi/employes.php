<?php
try {
    $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=mardi', 'root', '');

} catch (PDOException $e) {
    die ('Impossible de se connecter ');
}

$req = $bdd->query("SELECT * FROM contacts ORDER BY co_nom ASC, co_prenom ASC");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        while ($datas = $req->fetch()) {
            ?>
            <tr>
                <td><?php echo $datas['co_nom']; ?></td>
                <td><?php echo $datas['co_prenom']; ?></td>
                <td><?= $datas['co_gender']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
