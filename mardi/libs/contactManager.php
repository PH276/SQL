<?php
// démarrage SESSION
session_start();

// méthode GET :
// print_r($_GET);
// echo $_GET['nomEmploye'];

// méthode POST :
// print_r($_POST);
// echo $_POST['nomEmploye'];

// s'il n'y a pas d'action, retour d'une page
if(!isset($_GET['action'])){
    header ('Location:'.$_SERVER['HTTP_REFERER']);
    exit;
}

if($_GET['action']=='new'){
    $error="";
    if(empty($_POST['nomEmploye']) || trim($_POST['nomEmploye'])==""){
        $error.="Le nom n'a pas été saisi.<br>";
    }
    if(empty($_POST['prenomEmploye'])){
        $error.="Le prénom n'a pas été saisi.<br>";
    }

    if (!empty($error)){ // $error!=""
        $_SESSION['error']=$error;
        header ('Location:'.$_SERVER['HTTP_REFERER']);
        exit;
    } else{
        // connexion à la BD
        try {
            $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=mardi', 'root', '');

        } catch (PDOException $e) {
            die ('Impossible de se connecter ');
        }

        $req = $bdd->prepare("INSERT INTO contacts (co_nom, co_prenom, co_gender) VALUES (:nomEmploye, :prenomEmploye, :hommeFemme)");
        // 3 - excution de la requete
        $req->execute($_POST);
        $_SESSION['message']="Votre contact a été enregistré";
        header ('Location:../index.php');

    }


} else{
    // redirection PHP
    // header ('Location: ../index.php');

    // retour à ma page précédente
    header ('Location:'.$_SERVER['HTTP_REFERER']);
    exit;

}
echo '<pre>';
print_r($_POST);
echo '</pre>';

 ?>
