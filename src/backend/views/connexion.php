<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';
require 'inscription.php';

if (isset($_POST['btn-connecter'])) {
    // Récuperation des informations nécessaires sous forme de table
    $username=$_POST["username"];
    $passwords=$_POST["passwords"];
    $req="SELECT username, passwords FROM compte WHERE username=:username AND passwords=:passwords";
    $req=$database->prepare("$req");
    $req->bindParam(":username", $username);
    $req->bindParam(":username", $passwords);
    $result=$req->execute();

    // Vérification de la similarité entre les données
    if (($result['username']==$username) && ($result['passwords']==$passwords)){
        // Redirection sur le dashboard de l'utilisateur
        session_start();
        header('Location:http://localhost/Mandigo/biblioperso/src/frontend/public/pages/dashboard.php');
        exit();

    }
    else {
        echo "<script type='text/javascript'>alert('Les informations que vous avez entrées ne sont pas correctes.');</script>";
        exit();
    }
};

?>