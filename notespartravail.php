<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes des Étudiants</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav aria-label="Menu Principal">
            <a href="index.php" aria-current="page" aria-label="Page d'accueil">Page d'accueil</a>
            <a href="notefinale.php" aria-label="Note Finale">Note Finale</a>
            <a href="notespartravail.php" class="active" aria-label="Notes Par Travail">Notes par Travail</a>
            <a href="recherchenote.php" aria-label="recherche">Recherche</a>
        </nav>
    </header>

    <h1>Notes des Étudiants</h1>
    <form method="post">
        <label for="groupe">Choisir le groupe:</label>
        <select name="groupe" id="groupe" onchange="this.form.submit()">
            <option class="table-hidden" value="">Sélectionner...</option>
            <option class="table-visible" value="Groupe 1" >Groupe 1</option>
            <option class="table-visible" value="Groupe 2" >Groupe 2</option>
        </select>
    </form>

    <?php include 'Fonctions.php'; ?>

    <?php
    $groupeSelectionne = isset($_POST['groupe']) ? $_POST['groupe'] : '';
    $classTable1 = ($groupeSelectionne == 'Groupe 1') ? 'table-visible' : 'table-hidden';
    $classTable2 = ($groupeSelectionne == 'Groupe 2') ? 'table-visible' : 'table-hidden';
    ?>

</body>
</html>