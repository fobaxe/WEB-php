<<<<<<< HEAD
<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/TicketService.php";

$tickets = TicketService::getTickets($pdo);

if (!empty($_SESSION["tickets"])) {
    $tickets = array_merge($tickets, $_SESSION["tickets"]);
}

function afficherTicket($t) {
    if ($t["priorite"] == "haute") {
        $classePrio = "prio-high";
    } else if ($t["priorite"] == "moyenne") {
        $classePrio = "prio-med";
    } else {
        $classePrio = "prio-low";
    }

    if ($t["statut"] == "fermé") {
        $classeStatut = "closed";
    } else {
        $classeStatut = "open";
    }

    if (!empty($t["due"])) {
        $date = date_create($t["due"]);
        $dateFormatee = date_format($date, "d/m/Y");
    } else {
        $dateFormatee = "—";
    }

    echo "<tr>";
    echo "<td>" . $t["client"] . "</td>";
    echo "<td>" . $t["sujet"] . "</td>";
    echo "<td><span class='" . $classePrio . "'>" . $t["priorite"] . "</span></td>";
    echo "<td><span class='" . $classeStatut . "'>" . $t["statut"] . "</span></td>";
    echo "<td>" . $dateFormatee . "</td>";
    echo "<td><a class='btn-sm' href='ticket.php'>Voir le ticket</a></td>";
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>liste des tickets</title>
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

        <main class="principal-content">
            <table class="tickets-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Sujet</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>Date d'échéance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tickets as $t): ?>
                        <?php afficherTicket($t); ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>

=======
<?php
session_start();
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/TicketService.php";

$tickets = TicketService::getTickets($pdo);

if (!empty($_SESSION["tickets"])) {
    $tickets = array_merge($tickets, $_SESSION["tickets"]);
}

function afficherTicket($t) {
    if ($t["priorite"] == "haute") {
        $classePrio = "prio-high";
    } else if ($t["priorite"] == "moyenne") {
        $classePrio = "prio-med";
    } else {
        $classePrio = "prio-low";
    }

    if ($t["statut"] == "fermé") {
        $classeStatut = "closed";
    } else {
        $classeStatut = "open";
    }

    if (!empty($t["due"])) {
        $date = date_create($t["due"]);
        $dateFormatee = date_format($date, "d/m/Y");
    } else {
        $dateFormatee = "—";
    }

    echo "<tr>";
    echo "<td>" . $t["client"] . "</td>";
    echo "<td>" . $t["sujet"] . "</td>";
    echo "<td><span class='" . $classePrio . "'>" . $t["priorite"] . "</span></td>";
    echo "<td><span class='" . $classeStatut . "'>" . $t["statut"] . "</span></td>";
    echo "<td>" . $dateFormatee . "</td>";
    echo "<td><a class='btn-sm' href='ticket.php'>Voir le ticket</a></td>";
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>liste des tickets</title>
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

        <main class="principal-content">
            <table class="tickets-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Sujet</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>Date d'échéance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tickets as $t): ?>
                        <?php afficherTicket($t); ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>

>>>>>>> d71a0ab5ba2a82b324c81ebd20d6a93b09d554ce
