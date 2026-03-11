<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Se connecter</title>
</head>


<body>
    <header>
        <a href="index.php" >
            <img class="logo" src="./assets/logo.png" alt="Logo du site">
        </a>
    </header>
    <main class="container">
        <section class="card">
            <h1 id="login-title">Se connecter</h1>
            <form id="login-form" action="" method="get" class="login-form">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input id="username" type="text" class="input" placeholder="Votre nom d'utilisateur">
                    <div id="username-error" class="message-erreur titanic">Le nom d'utilisateur est obligatoire</div>
                </div>
         
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" class="input" placeholder="Mot de passe">
                    <div id="password-error" class="message-erreur titanic">Le mot de passe est obligatoire</div>   
                </div>

                <div class="form-help">
                    <a href="mdp.php"  class="forgot-link">Mot de passe oublié ?</a>
                </div>

                <div class="form-actions">
                    <button class="btn" type="submit">Connexion</button>
                </div>
            </form>
        </section>
    </main>
<script src="script4.js"></script>
</body>
</html>