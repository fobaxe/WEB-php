<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/TicketService.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    TicketService::addTicket($pdo, $_POST);
    header("Location: ticketlist.php?success=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newticket.css">
    <title>Créer un ticket</title>
</head>
<body>
    <main class="container">
        <a class="back" href="ticketlist.php">← Retour</a>
        <section class="card">
            <h1>Créer un ticket</h1>
            <form id="create-ticket-form" action="" method="POST">
                <div class="form-grid">
                    <div>
                        <div class="field-group">
                            <label for="subject">Sujet</label>
                            <input id="subject" name="subject" type="text" placeholder="Résumé bref du problème">
                            <div id="subject-error" class="message-erreur titanic">Le sujet est obligatoire</div>
                        </div>
                        <div class="field-group">
                            <label for="client">Client</label>
                            <input id="client" name="client" type="text" placeholder="Nom du client ou service">
                            <div id="client-error" class="message-erreur titanic">Le nom est obligatoire</div>
                        </div>
                    </div>

                    <aside class="right-column">
                        <div class="field-group">
                            <label for="status">statut</label>
                            <select id="status" name="status">
                                <option value="ouvert">Ouvert</option>
                                <option value="en-cours">En cours</option>
                                <option value="fermé">Fermé</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="priority">Priorité</label>
                            <select id="priority" name="priority">
                                <option value="basse">Basse</option>
                                <option value="moyenne" selected>Moyenne</option>
                                <option value="haute">Haute</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label for="due">Date d'échéance</label>
                            <input id="due" name="due" type="date">
                            <div id="due-error" class="message-erreur titanic">La date d'échéance est obligatoire</div>
                        </div>

                        <div class="form-actions">
                            <button class="btn-sm" type="submit">Créer le ticket</button>
                            <a class="btn-cancel" href="ticketlist.php">Annuler</a>
                        </div>
                    </aside>
                </div>
            </form>
        </section>
        <div id="success" class="toast titanic">
         Ticket créé avec succès.
        </div>    
    </main>
    <script src="script1.js"></script>
</body>
</html>