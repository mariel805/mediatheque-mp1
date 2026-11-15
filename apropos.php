
<?php

// Fonction pour afficher la date du jour
function afficherDate(): string
{
    return date("d/m/Y");
}

$titrePage = "À propos";

require_once __DIR__ . '/includes/header.php';

?>

<main class="container">

    <h1>À propos de la Médiathèque IPNET</h1>

    <section>
        <h2>Qui sommes-nous ?</h2>

        <p>
            La Médiathèque IPNET est un espace dédié à la lecture,
            à la recherche et à la découverte du savoir.
        </p>

        <p>
            Notre objectif est de faciliter l'accès aux livres
            et aux ressources documentaires pour les étudiants
            et les passionnés de lecture.
        </p>
    </section>

    <section>
        <h2>Notre mission</h2>

        <p>
            Encourager la lecture, promouvoir la connaissance
            et accompagner les étudiants dans leur formation.
        </p>
    </section>

    <section>
        <h2>Date du jour</h2>

        <p>
            Nous sommes le :
            <strong><?= afficherDate() ?></strong>
        </p>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
