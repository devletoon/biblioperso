<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';


if (isset($_POST['btn-inscrire'])) {

    $email=$_POST["email"];
    $username=$_POST["username"];
    $select_username="SELECT username, email FROM compte WHERE email='$email'";
    $select_email="SELECT username, email FROM compte WHERE username='$username'";
    $result_email=$database->query($select_email);
    $result_username=$database->query($select_username);

    if ($result_email->rowCount() > 0) {
        echo "Cet email est déjà utilisé.";
    }
    elseif ($result_username->rowCount() > 0) {
        echo "Ce nom d'utilisateur est déjà utilisée.";
    }
    else {
        $insert=$database->prepare("INSERT INTO compte(username, email, passwords) VALUES(:username, :email, :passwords);");
        $insert->bindParam(":username",$_POST['username']);
        $insert->bindParam(":email",$_POST['email']);
        $insert->bindParam(":passwords",$_POST['passwords']);
        $result = $insert->execute();
        if ($result==true) {
            echo "OK";
        }
        else {
            echo "ERROR";
        }

    };

};

?>