<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';


if (isset($_POST['btn-inscrire'])) {
    $email=$_POST["email"];
    $username=$_POST["username"];
    $sql="SELECT username, email FROM compte WHERE email='$email'";
    $sqli="SELECT username, email FROM compte WHERE username='$username'";
    $resulti = $database->query($sqli);
    $result = $database->query($sql);
    if ($result->rowCount() > 0) {
        echo "Cet email est déjà utilisé.";
    }
    elseif ($resulti->rowCount() > 0) {
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