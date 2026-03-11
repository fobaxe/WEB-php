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
        <a href="mdp.html" >
            <img class="logo" src="./assets/logo.png" alt="Logo du site">
        </a>
    </header>
    <main class="container">
        <section class="card">
            <h1 id="login-title">Réinitialiser mot de passe</h1>
            <form action=""  method="post" class="login-form">
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input id="email" name="email" type="email" class="input" placeholder="Votre adresse e-mail" required>
                </div>
         
                <div class="form-actions">
                    <a type="submit" class="btn" href="index.html">Envoyer le lien de réinitialisation</a>
                </div>
            </form>
        </section>
    </main>

</body>
</html>