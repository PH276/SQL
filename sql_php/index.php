<?php
echo "hello world<br>";

$age = 10;

echo "Le capitaine a ".$age." an";
echo ($age>1)?"s":"";

// tableaux
$table = array ();
//ou
$table = [];

$table = array ("Pascal", "Karim", "Bernadette");
echo "<br>".$table[2];

echo "<br>Le tableaux a ".count($table)." élément(s)";
// boucle for
for($i=0;$i<count($table);$i++){
    echo "<br>".$table[$i];
}

// foreach
$couleurs = array('rouge', 'vert', 'jaune');
foreach($couleurs as $couleur){
    echo "<br>".$couleur;
}

// tableaux indexés
$armoire = array ('pantalon'=>5, 'chemise'=>7, 'robe'=>7);
echo "<br>nombre de rtobes : ".$armoire['robe'];

$armoire['costume']=1;
$armoire['pantalon']=8;

foreach ($armoire as $nomEtagere =>$nombreVetements) {
    echo "<br>".$armoire[$nomEtagere]." : ".$nombreVetements;
}
// en mode débugage
echo "<pre>";
print_r($armoire);
echo "</pre>";

echo "<pre>";
var_dump($armoire);
echo "</pre>";

$employes = array(
    array('nom'=>"Bouffay", 'age'=>44),
    array('nom'=>"titi", 'age'=>24),
    array('nom'=>"toto", 'age'=>26)
);

foreach ($employes as $employe){
    echo "<br>";
    foreach ($employe as $carac=> $val){
        echo "<br>";
        echo $carac." : ".$val;
    }
}

// nom du 1er employe
echo "<br>"."<br>".$employes[0]['nom'];

// age du dernier employé
echo "<br>"."<br>age du dernier employé : ".$employes[count($employes)-1]['age']." ans";


    ?>
