<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Mandigo/biblioperso/src/backend/views/connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Mandigo/biblioperso/src/frontend/views/assets/icons/">
<link rel="stylesheet" href="/Mandigo/biblioperso/src/frontend/views/assets/styles/connexion.css">
    <title>biblioperso</title>
</head>
<body>
    <head>
        <div class="en-tete">
            <a href="/Mandigo/biblioperso/index.php">Accueil</a>
        </div>
    </head>
    <section>
        <div class="logging-boc">
            <img src="/Mandigo/biblioperso/src/frontend/views/assets/imgs/OIP.webp" alt="" width="100" height="100">
            <h2>Connexion</h2>
            <p>Connectez-vous en toute simplicité en saisissant vos informations d'identification ci-dessous.</p>
            <div class="champ-saisi">
                <input type="email" placeholder="Email ou nom d'utilisateur" required>
                <input type="password" minlength="8" maxlength="20" placeholder="Mot de passe" required>
                <button>Se connecter</button>
            </div>
            <div class="saisi-option">
                <h5><a href="#">Mot de passe oublié ?</a></h5>
                <p>Vous n'avez pas de compte ?</p>
                <a href="/Mandigo/biblioperso/src/frontend/views/pages/inscription.php" id="ccompte">Créer un compte</a>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>