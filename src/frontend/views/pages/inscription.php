<?php
include $_SERVER['DOCUMENT_ROOT'] . "/Mandigo/biblioperso/src/backend/views/inscription.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Mandigo/biblioperso/src/frontend/views/assets/icons/">
<link rel="stylesheet" href="/Mandigo/biblioperso/src/frontend/views/assets/styles/inscription.css">
    <title>biblioperso</title>
</head>
<body>
    <section>
        <div class="logging-boc">
            <img src="/Mandigo/biblioperso/src/frontend/views/assets/imgs/OIP.webp" alt="" width="100" height="100">
            <h2>Inscription</h2>
            <p>Inscrivez-vous en toute simplicité en enregistrant vos informations d'identification ci-dessous.</p>
            <div class="champ-saisi">
                <input type="email" placeholder="Email ou nom d'utilisateur">
                <input type="password" minlength="8" maxlength="20" placeholder="Mot de passe">
                <button>Enregistrer</button>
            </div>
            <div class="saisi-option">
                <h5><a href="#">Besoin d'aide ?</a></h5>
                <p>Vous avez un compte ?</p>
                <a href="/Mandigo/biblioperso/src/frontend/views/pages/connexion.php" id="ccompte">Se connecter</a>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>