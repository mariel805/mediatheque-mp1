
<?php

// Importation des données et des fonctions
require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

// Récupération des catégories disponibles
$categories = array_unique(array_column($livres, 'categorie'));

// Vérification du paramètre URL
$categorie = $_GET['categorie'] ?? null;
$erreur = false;

if ($categorie !== null) {

    if (!is_string($categorie) || !in_array($categorie, $categories, true)) {
        $erreur = true;
        $livresAffiches = [];
    } else {
        $livresAffiches = filtrerParCategorie($livres, $categorie);
    }

} else {
    $livresAffiches = $livres;
}

// Nombre de livres affichés
$nombreLivres = count($livresAffiches);

$titrePage = "Catalogue";

require_once __DIR__ . '/includes/header.php';

?>

<main class="container">

    <h1>Notre catalogue de livres</h1>

    <p>Découvrez les livres disponibles dans notre médiathèque.</p>

    <h2>Filtrer par catégorie</h2>

    <p>
        <a href="catalogue.php">Tous les livres</a>
    </p>

    <?php foreach ($categories as $cat): ?>
        <a href="catalogue.php?categorie=<?= urlencode($cat) ?>">
            <?= htmlspecialchars(ucfirst($cat)) ?>
        </a> |
    <?php endforeach; ?>

    <hr>

    <?php if ($erreur): ?>

        <p>Erreur : cette catégorie n'existe pas.</p>

    <?php else: ?>

        <h2>Nombre de livres affichés : <?= $nombreLivres ?></h2>

        <?php if ($nombreLivres > 0): ?>

            <div class="liste-livres">

                <?php foreach ($livresAffiches as $livre): ?>

                    <?= afficherLivre($livre) ?>

                <?php endforeach; ?>

            </div>

        <?php else: ?>

            <p>Aucun livre trouvé dans cette catégorie.</p>

        <?php endif; ?>

    <?php endif; ?>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
