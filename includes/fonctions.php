
<?php


function afficherLivre(array $livre): string
{
    $titre = htmlspecialchars($livre["titre"]);
    $auteur = htmlspecialchars($livre["auteur"]);
    $annee = htmlspecialchars((string)$livre["annee"]);
    $categorie = htmlspecialchars($livre["categorie"]);
    $prix = htmlspecialchars((string)$livre["prix"]);

    $disponibilite = $livre["disponible"]
        ? "Disponible"
        : "Indisponible";

    return "
        <div class='livre'>
            <h3>$titre</h3>
            <p>Auteur : $auteur</p>
            <p>Année : $annee</p>
            <p>Catégorie : $categorie</p>
            <p>Prix : $prix FCFA</p>
            <p>Disponibilité : $disponibilite</p>
            <a href='detail.php?id=" . (int)$livre["id"] . "'>
                Voir les détails
            </a>
        </div>
    ";
}



function filtrerParCategorie(array $livres, string $categorie): array
{
    return array_filter($livres, function ($livre) use ($categorie) {
        return $livre["categorie"] === $categorie;
    });
}



function trouverLivreParId(array $livres, int $id): ?array
{
    foreach ($livres as $livre) {
        if ($livre["id"] === $id) {
            return $livre;
        }
    }

    return null;
}



function compterLivresDisponibles(array $livres): int
{
    $nombre = 0;

    foreach ($livres as $livre) {
        if ($livre["disponible"] === true) {
            $nombre++;
        }
    }

    return $nombre;
}

?>

