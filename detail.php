
<?php


require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

// Vérification de l'identifiant dans l'URL
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$livre = null;

if ($id !== false && $id !== null && $id > 0) {
    $livre = trouverLivreParId($livres, $id);
}

$titrePage = "Détail du livre";

require_once __DIR__ . '/includes/header.php';

?>

<main class="container">

    <h1>Détails du livre</h1>

    <?php if ($livre !== null): ?>

        <div class="livre-detail">

            <h2><?= htmlspecialchars($livre["titre"]) ?></h2>

            <p>
                <strong>Auteur :</strong>
                <?= htmlspecialchars($livre["auteur"]) ?>
            </p>

            <p>
                <strong>Année de publication :</strong>
                <?= htmlspecialchars((string)$livre["annee"]) ?>
            </p>

            <p>
                <strong>Catégorie :</strong>
                <?= htmlspecialchars($livre["categorie"]) ?>
            </p>

            <p>
                <strong>Prix :</strong>
                <?= htmlspecialchars((string)$livre["prix"]) ?> FCFA
            </p>

            <p>
                <strong>Disponibilité :</strong>

                <?= $livre["disponible"]
                    ? "Disponible"
                    : "Indisponible" ?>
            </p>

        </div>

    <?php else: ?>

        <p>Erreur : livre introuvable ou identifiant invalide.</p>

    <?php endif; ?>

    <a href="catalogue.php">Retour au catalogue</a>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
