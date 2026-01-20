<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des livres</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📚 Livres disponibles</h2>

<table>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Année</th>
        <th>Prix</th>
    </tr>

    <?php
    $livres = [
        [
            "titre" => "Apprendre PHP",
            "auteur" => "Fatine Chebab",
            "annee" => 2024,
            "prix" => 120,
            "disponible" => true
        ],
        [
            "titre" => "JavaScript pour débutants",
            "auteur" => "Ali Ahmed",
            "annee" => 2023,
            "prix" => 100,
            "disponible" => false
        ],
        [
            "titre" => "HTML & CSS",
            "auteur" => "Sara Benali",
            "annee" => 2022,
            "prix" => 80,
            "disponible" => true
        ]
    ];
    
    $total = 0;
    $resultat = null;
    
    if (isset($_POST["chercher"])) {
        $titre = $_POST["titre"];
        foreach ($livres as $livre) {
            if (strtolower($livre["titre"]) == strtolower($titre)) {
                $resultat = $livre;
                break;
            }
        }
    }
    foreach ($livres as $livre) {
        if ($livre["disponible"]) {
            echo "<tr>";
            echo "<td>{$livre['titre']}</td>";
            echo "<td>{$livre['auteur']}</td>";
            echo "<td>{$livre['annee']}</td>";
            echo "<td>{$livre['prix']} DH</td>";
            echo "</tr>";
            $total += $livre["prix"];
        }
    }
    ?>
</table>

<p class="total">Total : <?php echo $total; ?> DH</p>

<hr>

<h2>🔍 Rechercher un livre</h2>

<form method="post">
    <input type="text" name="titre" placeholder="Titre du livre" required>
    <input type="submit" name="chercher" value="Rechercher">
</form>

<?php
if ($resultat) {
    echo "<div class='resultat'>
            <p><b>Titre :</b> {$resultat['titre']}</p>
            <p><b>Auteur :</b> {$resultat['auteur']}</p>
            <p><b>Année :</b> {$resultat['annee']}</p>
            <p><b>Prix :</b> {$resultat['prix']} DH</p>
          </div>";
} elseif (isset($_POST["chercher"])) {
    echo "<p class='erreur'>Livre non trouvé</p>";
}
?>

</body>
</html>






<?php
$livres = [
    [
        "titre" => "Apprendre PHP",
        "auteur" => "Fatine Chebab",
        "annee" => 2024,
        "prix" => 120,
        "disponible" => true
    ],
    [
        "titre" => "JavaScript pour débutants",
        "auteur" => "Ali Ahmed",
        "annee" => 2023,
        "prix" => 100,
        "disponible" => false
    ],
    [
        "titre" => "HTML & CSS",
        "auteur" => "Sara Benali",
        "annee" => 2022,
        "prix" => 80,
        "disponible" => true
    ]
];

$total = 0;
$resultat = null;

if (isset($_POST["chercher"])) {
    $titre = $_POST["titre"];
    foreach ($livres as $livre) {
        if (strtolower($livre["titre"]) == strtolower($titre)) {
            $resultat = $livre;
            break;
        }
    }
}
?>

