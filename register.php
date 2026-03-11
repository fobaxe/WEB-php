<?php
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/UserService.php";

$erreur = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["password"] !== $_POST["password_confirm"]) {
        $erreur = "Les mots de passe ne correspondent pas";
    } else {
        $ok = UserService::register($pdo, $_POST["username"], $_POST["password"]);
        if ($ok) {
            header("Location: index.php?registered=1");
            exit();
        } else {
            $erreur = "Ce nom d'utilisateur est déjà pris";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Créer un compte</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo" src="./assets/logo.png" alt="Logo du site">
        </a>
    </header>
    <main class="container">
        <section class="card">
            <h1>Créer un compte</h1>
            <?php if ($erreur != ""): ?>
                <div class="message-erreur"><?= $erreur ?></div>
            <?php endif; ?>

            <form action="" method="POST" class="login-form">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input id="username" name="username" type="text" class="input" placeholder="Choisissez un nom d'utilisateur">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" class="input" placeholder="Choisissez un mot de passe">
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirmer le mot de passe</label>
                    <input id="password_confirm" name="password_confirm" type="password" class="input" placeholder="Confirmez votre mot de passe">
                </div>
                <div class="form-actions">
                    <button class="btn" type="submit">Créer mon compte</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>