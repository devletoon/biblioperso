<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';

// VERIFICATEUR DE PRESENCE DE DONNÉES SIMILAIRE DANS LA DB
if (isset($_POST['btn-connecter'])) {
    $identifier=$_POST["identifier"];
    $passwords=$_POST["passwords"];
    $req="SELECT * FROM compte WHERE identifier=:email OR identifier=:username AND passwords=:passwords";
    $show_data=$database->prepare($req);
    $result=$show_data->execute();
    if ($result){
        echo "Connexion réussie";
    }
    else {
        echo "Erreur de connexion";
    }
};

?>