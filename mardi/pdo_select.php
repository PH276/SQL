<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=mardi;charset=utf8', 'root', '');
    echo 'OK';
} catch (PDOException $e) {
    echo 'Impossible de se connecter '.$e;
    exit;
}

// SELECT
$req = $bdd->query("SELECT * FROM contacts");
while ($datas = $req->fetch()){
    print_r($datas);
    echo "<br>";
}

$req = $bdd->query('SELECT * FROM contacts WHERE co_prenom="Pascalé"');
while ($datas = $req->fetch()){
    print_r($datas);
    echo "<br>";
}

$req = $bdd->query('SELECT * FROM contacts');
$datas = $req->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($datas);
echo "</pre>";
echo "<br>";



?>
