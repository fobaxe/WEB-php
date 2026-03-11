<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Liste des projets</title>
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
        <section class="card1">
            <div class="tickets-grid">
                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-001 • Projet Alpha</div>
                            <div class="ticket-sub">Refonte interface utilisateur</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-high">Haute</div>
                            <div class="open">En cours</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-002 • Projet Beta</div>
                            <div class="ticket-sub">Intégration API de paiement</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-med">Moyenne</div>
                            <div class="open">Planifié</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-003 • Projet Gamma</div>
                            <div class="ticket-sub">Automatisation des tests</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-low">Basse</div>
                            <div class="closed">Complété</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-004 • Projet Delta</div>
                            <div class="ticket-sub">Optimisation base de données</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-high">Haute</div>
                            <div class="open">En cours</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

                <section     class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-005 • Projet Epsilon</div>
                            <div class="ticket-sub">Mise en place d'un CMS</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-med">Moyenne</div>
                            <div class="open">Planifié</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">PRJ-006 • Projet Zeta</div>
                            <div class="ticket-sub">Sécurisation des accès</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="prio-low">Basse</div>
                            <div class="closed">Complété</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="detailprojet.php">Voir le projet</a></div>
                </section>

            </div>
        </section>
    </main>
</div>
</body>
</html>

