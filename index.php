
<?php


require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';


$totalLivres = count($livres);


$titrePage = "Accueil";

require_once __DIR__ . '/includes/header.php';

?>

<main class="container">

    <h1>Bienvenue à la Médiathèque IPNET</h1>

    <p>
        Découvrez notre catalogue de livres et explorez
        différentes catégories de lecture.
    </p>

    <div class="statistique">
        <h2>Notre catalogue</h2>

        <p>
            Nombre total de livres :
            <strong><?= $totalLivres ?></strong>
        </p>

        <p>
            Livres disponibles :
            <strong><?= compterLivresDisponibles($livres) ?></strong>
        </p>
    </div>

    <a href="catalogue.php" class="bouton">
        Consulter le catalogue
    </a>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
