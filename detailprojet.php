<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticket.css">
    <title>Détails du projet</title>
</head>

<body>
<main class="container">
    <a class="back" href="projet.php">← Retour à la liste</a>
    <section class="ticket-card">
        <header>
            <h1 id="ticket-subject">Refonte interface utilisateur</h1>
            <div class="meta">
                <span id="ticket-id">PRJ-001</span>
                <span id="ticket-status" class="status en-cours">En cours</span>
            </div>
        </header>

        <div class="fields">
            <div class="field"><strong>Client / Sponsor :</strong> <span>Client A</span></div>
            <div class="field"><strong>Cadre contractuel :</strong> <span>Maintenance corrective + évolutive (SLA 48h)</span></div>
            <div class="field"><strong>Priorité :</strong> <span class="priority-high">Haute</span></div>
            <div class="field"><strong>Responsable projet :</strong> <span>Marie Dupont</span></div>
        </div>

        <div class="actions">
            <button id="claim">Éditer le projet</button>
            <button id="close" onclick="window.location.href='ticket.php'">Ajouter un ticket</button>
        </div>

        <footer class="notes">
            <h3>Contexte et description</h3>
            <p id="project-description">Refonte complète de l'interface utilisateur pour améliorer l'ergonomie et la compatibilité mobile. Livrables : maquettes, composants réutilisables, tests utilisateurs. Le projet regroupe plusieurs tickets fonctionnels et techniques liés au front-end et à l'accessibilité.</p>
        </footer>

        <section class="Tickets liés">
            <h2>Tickets liés</h2>
            <div class="tickets-list">
                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20021</div>
                            <div class="ticket-sub">Bouton de recherche non accessible au clavier</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-medium">Moyenne</div>
                            <div class="open">En cours</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20022</div>
                            <div class="ticket-sub">Incohérence styles header sur mobile</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-low">Basse</div>
                            <div class="open">Planifié</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20023</div>
                            <div class="ticket-sub">Tests utilisateurs</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-high">Haute</div>
                            <div class="open">Ouvert</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>
            </div>
        </section>
    </section>
</main>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticket.css">
    <title>Détails du projet</title>
</head>

<body>
<main class="container">
    <a class="back" href="projet.php">← Retour à la liste</a>
    <section class="ticket-card">
        <header>
            <h1 id="ticket-subject">Refonte interface utilisateur</h1>
            <div class="meta">
                <span id="ticket-id">PRJ-001</span>
                <span id="ticket-status" class="status en-cours">En cours</span>
            </div>
        </header>

        <div class="fields">
            <div class="field"><strong>Client / Sponsor :</strong> <span>Client A</span></div>
            <div class="field"><strong>Cadre contractuel :</strong> <span>Maintenance corrective + évolutive (SLA 48h)</span></div>
            <div class="field"><strong>Priorité :</strong> <span class="priority-high">Haute</span></div>
            <div class="field"><strong>Responsable projet :</strong> <span>Marie Dupont</span></div>
        </div>

        <div class="actions">
            <button id="claim">Éditer le projet</button>
            <button id="close" onclick="window.location.href='ticket.php'">Ajouter un ticket</button>
        </div>

        <footer class="notes">
            <h3>Contexte et description</h3>
            <p id="project-description">Refonte complète de l'interface utilisateur pour améliorer l'ergonomie et la compatibilité mobile. Livrables : maquettes, composants réutilisables, tests utilisateurs. Le projet regroupe plusieurs tickets fonctionnels et techniques liés au front-end et à l'accessibilité.</p>
        </footer>

        <section class="Tickets liés">
            <h2>Tickets liés</h2>
            <div class="tickets-list">
                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20021</div>
                            <div class="ticket-sub">Bouton de recherche non accessible au clavier</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-medium">Moyenne</div>
                            <div class="open">En cours</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20022</div>
                            <div class="ticket-sub">Incohérence styles header sur mobile</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-low">Basse</div>
                            <div class="open">Planifié</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>

                <section class="ticket-item">
                    <div class="ticket-head">
                        <div>
                            <div class="ticket-id">#20023</div>
                            <div class="ticket-sub">Tests utilisateurs</div>
                        </div>
                        <div class="ticket-meta">
                            <div class="priority-high">Haute</div>
                            <div class="open">Ouvert</div>
                        </div>
                    </div>
                    <div class="ticket-actions"><a class="btn-sm" href="ticket.php">Voir le ticket</a></div>
                </section>
            </div>
        </section>
    </section>
</main>
</body>
</html>
>>>>>>> d71a0ab5ba2a82b324c81ebd20d6a93b09d554ce
