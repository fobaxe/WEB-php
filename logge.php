<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/TicketService.php";

$tickets = TicketService::getTickets($pdo);

$filterStatut = $_GET["statut"] ?? "tous";
$filterPrio = $_GET["priorite"] ?? "toutes";

function afficherTicket($t) {
    if ($t["priorite"] == "haute") {
        $classePrio = "priority-high";
    } else if ($t["priorite"] == "moyenne") {
        $classePrio = "priority-medium";
    } else {
        $classePrio = "priority-low";
    }

    if ($t["statut"] == "fermé") {
        $classeStatut = "status-closed";
    } else {
        $classeStatut = "status-open";
    }

    echo "<tr>";
    echo "<td><a class='cell-link' href='ticket.php'>" . $t["sujet"] . "</a></td>";
    echo "<td><a class='cell-link' href='ticket.php'>" . $t["client"] . "</a></td>";
    echo "<td class='" . $classePrio . " priority'><a class='cell-link' href='ticket.php'>" . ucfirst($t["priorite"]) . "</a></td>";
    echo "<td class='" . $classeStatut . " status'><a class='cell-link' href='ticket.php'>" . ucfirst($t["statut"]) . "</a></td>";
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>TicketFlow</title>
</head>
<body>
    <header>
        <a href="logge.php">
            <img class="logo" src="./assets/logo.png" alt="logo">
        </a>
        <button type="button" class="create-ticket" onclick="window.location.href='createproject.php'">Créer un projet</button>
        <button type="button" class="create-ticket" onclick="window.location.href='createtickets.php'">Créer un ticket</button>
        <button type="button" class="login" onclick="window.location.href='profil.php'">Mon compte</button>
    </header>
    <div class="parent">
        <aside class="sidebar">
            <h3>Navigation</h3>
            <div class="side-buttons">
                <a href="logge.php">Tableau de bord</a>
                <a href="ticketlist.php">Liste des tickets</a>
                <a href="projet.php">Liste des projets</a>
            </div>
            <a href="settings.php">
                <img class="settings" src="./assets/parametres.png" alt="Paramètres"> 
            </a>
        </aside>

        <section class="main-content">
            <div class="main-header">
                <h2>Tickets récents</h2>
            </div>

            <div id="titrefiltre"><p>Filtre:</p></div>
            <section class="Filtre">
                <div class="filtre-status">
                    <p id="statut">statut</p>
                    <div class="filtre-btn">
                        <a class="btn-filtre <?= $filterStatut == 'ouvert' ? 'active' : '' ?>" href="?statut=ouvert&priorite=<?= $filterPrio ?>">Ouvert</a>
                        <a class="btn-filtre <?= $filterStatut == 'en cours' ? 'active' : '' ?>" href="?statut=en cours&priorite=<?= $filterPrio ?>">En cours</a>
                        <a class="btn-filtre <?= $filterStatut == 'fermé' ? 'active' : '' ?>" href="?statut=fermé&priorite=<?= $filterPrio ?>">Fermé</a>
                        <a class="btn-filtre <?= $filterStatut == 'tous' ? 'active' : '' ?>" href="?statut=tous&priorite=<?= $filterPrio ?>">Tous</a>
                    </div>
                </div>
                <div class="filtre-priorite">
                    <p>priorité</p>
                    <div class="filtre-btn">
                        <a class="btn-filtre1 <?= $filterPrio == 'haute' ? 'active' : '' ?>" href="?statut=<?= $filterStatut ?>&priorite=haute">Haute</a>
                        <a class="btn-filtre1 <?= $filterPrio == 'moyenne' ? 'active' : '' ?>" href="?statut=<?= $filterStatut ?>&priorite=moyenne">Moyenne</a>
                        <a class="btn-filtre1 <?= $filterPrio == 'basse' ? 'active' : '' ?>" href="?statut=<?= $filterStatut ?>&priorite=basse">Basse</a>
                        <a class="btn-filtre1 <?= $filterPrio == 'toutes' ? 'active' : '' ?>" href="?statut=<?= $filterStatut ?>&priorite=toutes">Toutes</a>
                    </div>
                </div>
            </section>

            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>Sujet</th>
                            <th>Client</th>
                            <th>Priorité</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tickets as $t): ?>
                            <?php
                                $matchStatut = ($filterStatut == "tous" || $filterStatut == $t["statut"]);
                                $matchPrio = ($filterPrio == "toutes" || $filterPrio == $t["priorite"]);
                                if ($matchStatut && $matchPrio):
                            ?>
                                <?php afficherTicket($t); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>