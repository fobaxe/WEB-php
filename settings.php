<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Paramètres</title>
</head>
<body>
    <header>
        <a href="logge.php">
            <img class="logo" src="./assets/logo.png" alt="logo">
        </a>
        <div>
            <p>Paramètres</p>
        </div>
    </header>
    
    <main class="container">
        <a class="back" href="logge.php">← Retour</a>
        <div class="parent">
            <div class="card settings-card">
                <h2>Paramètres du compte</h2>
                
                <section class="settings-section">
                    <h3 class="settings-title">Profil</h3>
                    <div class="settings-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" class="input" value="Matthieu Renouard">
                    </div>
                    <div class="settings-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="input" value="matthieu@example.com">
                    </div>
                    <div class="settings-group">
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" id="password" class="input" placeholder="Laissez vide pour ne pas changer">
                    </div>
                    <button class="btn-sm">Enregistrer les modifications</button>
                </section>

                <section class="settings-section">
                    <h3 class="settings-title">Préférences</h3>
                    <div class="settings-group">
                        <label for="language">Langue</label>
                        <select id="language" class="input">
                            <option value="fr">Français</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                    <div class="settings-group">
                        <label for="theme">Thème</label>
                        <select id="theme" class="input">
                            <option value="light">Clair</option>
                            <option value="dark">Sombre</option>
                            <option value="auto">Automatique</option>
                        </select>
                    </div>
                </section>

                <section class="settings-section danger-zone">
                    <button class="btn-danger">Supprimer mon compte</button>
                </section>
            </div>
        </div>
    </main>
</body>
</html>