<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newticket.css">
    <title>Créer un projet</title>
</head>
<body>
    <main class="container">
        <a class="back" href="logge.php">← Retour</a>
        <section class="card">
            <h1>Créer un projet</h1>
            <form id="create-project-form" action="" method="POST">
                <div class="form-grid">
                    <div>
                        <div class="field-group">
                            <label for="subject">Sujet</label>
                            <input id="subject" type="text" placeholder="Résumé bref du problème" >
                            <div id="subject-error" class="message-erreur titanic">Le sujet est obligatoire</div>
                        </div>

                        <div class="field-group">
                            <label for="description">Description détaillée</label>
                            <textarea id="description" rows="6" placeholder="Décrire le problème, étapes pour reproduire, résultats attendus et observés" ></textarea>
                            <div id="description-error" class="message-erreur titanic">La description est obligatoire</div>
                        </div>
                        <div class="field-group">
                            <label for="responsable">Responsable du projet</label>
                            <input id="responsable" type="text" placeholder="Nom du responsable du projet">
                            <div id="responsable-error" class="message-erreur titanic">Le responsable est obligatoire</div>
                        </div>
                    </div>
                    <aside class="right-column">
                        <div class="field-group">
                            <label for="client">Client / Demandeur</label>
                            <input id="client" name="client" type="text" placeholder="Nom du client ou service">
                            <div id="client-error" class="message-erreur titanic">Le nom est obligatoire</div>
                        </div>

                        <div class="field-group">
                            <label for="project">Ticket associé</label>
                            <select id="project" name="project">
                                <option value="">— Aucun —</option>
                                <option value="PRJ-001">10091</option>
                                <option value="PRJ-002">10092</option>
                                <option value="PRJ-003">10093</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label for="priority">Priorité</label>
                            <select id="priority" name="priority">
                                <option>Basse</option>
                                <option selected>Moyenne</option>
                                <option>Haute</option>
                            </select>
                            <div id="priority-error" class="message-erreur titanic">La priorité est obligatoire</div>
                        </div>

                        <div class="field-group">
                            <label for="estimate">Temps estimé</label>
                            <input id="estimate" type="text" placeholder="Ex: 2h, 1j">
                            <div id="estimate-error" class="message-erreur titanic">Le temps estimé est obligatoire</div>
                        </div>

                        <div class="field-group">
                            <label for="due">Date d'échéance</label>
                            <input id="due" type="date">
                            <div id="due-error" class="message-erreur titanic">La date d'échéance est obligatoire</div>
                        </div>
                        <div class="form-actions">
                            <button class="btn-sm" type="submit">Créer le projet</button>
                            <a class="btn-cancel" href="logge.php">Annuler</a>
                        </div>
                    </aside>
                </div>
            </form>
        </section>
        <div id="success" class="toast titanic">
            Projet créé avec succès.
         </div>
    </main>
<script src="script3.js"></script>
</body>
</html>