<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/config/database.php';

if (isset($_POST['btn-connecter'])) {
    // Récuperation des informations nécessaires
    $identifier=htmlspecialchars($_POST["identifier"]);
    $passwords=htmlspecialchars($_POST["passwords"]);
    $req="SELECT * FROM compte WHERE email='.$identifier.' OR username='.$identifier.' AND passwords='.$passwords.'";
    $show_data=$database->prepare($req);
    $execut=$show_data->execute();
    $table=array($execut);

    // Conditions de redirection
    if ($result){
        header('Location:http://localhost/Mandigo/biblioperso/src/frontend/public/pages/dashboard.php');
        exit();
    }
    else {
        echo "<script type='text/javascript'>alert('Les informations que vous avez entrées ne sont pas correctes.');</script>";
    }
};

?>