<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=mardi;charset=utf8', 'root', '');
    echo 'OK';
} catch (PDOException $e) {
    echo 'Impossible de se connecter '.$e;
    exit;
}

// valeurs nmmées
// 1 - on met dans une table indexée les donnéees que l'on veut insérer
$data = array('nom'=>'HUI', "prenom"=>'Pascalé', "gender"=>1);
// 2 - on prépare la requete
$req = $bdd->prepare("INSERT INTO contacts (co_nom, co_prenom, co_gender) VALUES (:nom, :prenom, :gender)");
// 3 - excution de la requete
$req->execute($data);


// valeurs anonymes
// 1 - on met dans une table les donnéees que l'on veut insérer
$data = array('Bouffay', 'Karim', 1);
// 2 - on prépare la requete
$req = $bdd->prepare("INSERT INTO contacts (co_nom, co_prenom, co_gender) VALUES (?, ?, ?)");
// 3 - excution de la requete
$req->execute($data);

// Update
$req=$bdd->exec('UPDATE contacts SET co_prenom="Carole" WHERE co_id=4');

// delete
$req=$bdd->exec('DELETE FROM contacts WHERE co_prenom="Karim"');



 ?>
