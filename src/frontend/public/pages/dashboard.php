<?php
include $_SERVER['DOCUMENT_ROOT'].'/Mandigo/biblioperso/src/backend/public/dashboard.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Mandigo/biblioperso/src/frontend/views/assets/icons/icone.png">
    <link rel="stylesheet" href="/Mandigo/biblioperso/src/frontend/public/assets/styles/dashboard.css">
    <title>biblioperso</title>
</head>
<body>
    <div class="dashboard-container">
        <aside class="dashboard-sidebar">
            <div class="sidebar-header">
                <span class="settings-icon" title="Paramètres">
                    <img src="/Mandigo/biblioperso/src/frontend/public/assets/imgs/icon_setting_u" alt="Paramètres" style="width:24px;height:24px;cursor:pointer;">
                </span>
                <div class="profile-block">
                    <img class="profile-pic" src="/Mandigo/biblioperso/src/frontend/views/assets/icons/icone.png" alt="Photo de profil" style="width:60px;height:60px;border-radius:50%;object-fit:cover;">
                    <span class="username">Username</span>
                </div>
            </div>
            <button id="add-book-btn">Ajouter un livre</button>
            <div class="user-actions">
                <!-- Actions supplémentaires du compte -->
            </div>
        </aside>
        <main class="dashboard-main">
            <h1>Ma Bibliothèque</h1>
            <div class="books-grid">
                <!-- Exemple de livre -->
                <div class="book-card">
                    <img src="../assets/imgs/book-placeholder.jpg" alt="Couverture du livre">
                    <div class="book-info">
                        <h3>Titre du livre</h3>
                        <p>Description du livre...</p>
                        <div class="book-tags">
                            <span class="tag">Aventure</span>
                            <span class="tag">Fantastique</span>
                        </div>
                    </div>
                    <div class="book-actions" style="display:none;">
                        <button class="read-btn">Lire</button>
                        <button class="edit-btn">Éditer</button>
                        <button class="remove-btn">Supprimer</button>
                    </div>
                </div>
                <!-- Répéter pour chaque livre enregistré -->
            </div>
        </main>
    </div>

    <!-- Formulaire modal pour ajouter un livre -->
    <div id="add-book-modal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Ajouter un livre</h2>
            <form id="add-book-form">
                <input type="text" name="title" placeholder="Titre" required>
                <textarea name="description" placeholder="Description" required></textarea>
                <input type="text" name="tags" placeholder="Tags (séparés par des virgules)">
                <input type="file" name="file" accept=".pdf,.doc,.docx,.pptx,.odt,.xlsx,.xml" required>
                <input type="url" name="cover" placeholder="URL de la couverture">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>

    <script>
        // JS minimal pour ouvrir/fermer le modal d'ajout
        document.getElementById('add-book-btn').onclick = function() {
            document.getElementById('add-book-modal').style.display = 'block';
        };
        document.querySelector('.close-modal').onclick = function() {
            document.getElementById('add-book-modal').style.display = 'none';
        };
        window.onclick = function(event) {
            if (event.target == document.getElementById('add-book-modal')) {
                document.getElementById('add-book-modal').style.display = 'none';
            }
        };

        // Affichage des actions sur le livre au survol
        document.querySelectorAll('.book-card').forEach(function(card) {
            card.addEventListener('mouseenter', function() {
                var actions = card.querySelector('.book-actions');
                if(actions) actions.style.display = 'flex';
            });
            card.addEventListener('mouseleave', function() {
                var actions = card.querySelector('.book-actions');
                if(actions) actions.style.display = 'none';
            });
        });
    </script>
</body>
</html>
