<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticket.css">
    <title>Détails du ticket</title>
</head>

<body>
<main class="container">
    <a class="back" href="logge.php">← Retour à la liste</a>
    <section class="ticket-card">
        <header>
            <h1 id="ticket-subject">Impossible de synchroniser la boîte mail</h1>
            <div class="meta">
                <span id="ticket-id">#10099</span>
                <span id="ticket-status" class="meta">En cours</span>
            </div>
        </header>
        <div class="fields">
            <div class="field"><strong>Client :</strong> <span id="ticket-client">Client Z</span></div>
            <div class="field"><strong>Priorité :</strong> <span class="priority-high">Haute</span></div>
            <div class="field"><strong>Temps disponible :</strong> <span id="ticket-time">2h</span></div>
        </div>
        <div class="actions">
            <button id="claim">Prendre en charge</button>
            <button id="close">Marquer comme résolu</button>
        </div>
        <footer class="notes">
            <h3>Description</h3>
            <p id="ticket-description">Le client indique que la synchronisation IMAP échoue depuis la dernière mise à jour. Erreur 503 intermittente constatée sur plusieurs postes, impactant toute la boîte partagée.</p>
        </footer>
    </section>
</main>
</body>
</html>
