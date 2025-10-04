<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';
require 'connexion.php';

if (isset($_POST['btn-inscrire'])) {

    $email=$_POST["email"];
    $username=$_POST["username"];
    $select_username="SELECT username, email FROM compte WHERE email='$email'";
    $select_email="SELECT username, email FROM compte WHERE username='$username'";
    $result_email=$database->query($select_email);
    $result_username=$database->query($select_username);

    if ($result_email->rowCount() > 0) {
        echo "<script type='text/javascript'>alert('Cette adresse email est déjà utilisé');</script>";
    }
    elseif ($result_username->rowCount() > 0) {
        echo "<script type='text/javascript'>alert('Ce nom d\'utilisateur est déjà utilisé');</script>";
    }
    else {
        $insert=$database->prepare("INSERT INTO compte(username, email, passwords) VALUES(:username, :email, :passwords);");
        $insert->bindParam(":username",$_POST['username']);
        $insert->bindParam(":email",$_POST['email']);
        $insert->bindParam(":passwords",$_POST['passwords']);
        $result = $insert->execute();
        if ($result==true) {
            header('Location:http://localhost/Mandigo/biblioperso/src/frontend/views/pages/connexion.php');
            exit();
        }
        else {
            echo "<script type='text/javascript'>alert('Une erreur s'est produite. Veuillez ressayer plus tard');</script>";
        }

    };

};

?>