<?php
// $requete = $_Get['res'];
// $reponse = '';

// if($requete == 'Martin'){
//     $reponse = "c'est Martin";
// }

// echo '<br><br><h1>' .$reponse.' ! </h1>';

?>

<?php
$competences = [
    [
        "nom" => ["html5", "css3"],
        "description" => "Création de pages web structurées et stylées",
    ],
    [
        "nom" => ["javascript"],
        "description" => "Interaction côté client avec le DOM",
    ],
    [
        "nom" => ["react"],
        "description" => "Librairie JS pour créer des interfaces",
    ],
    [
        "nom" => ["php"],
        "description" => "Langage serveur dynamique",
    ],
    [
        "nom" => ["mysql"],
        "description" => "Gestion des bases de données",
    ],
    [
        "nom" => ["symfony"],
        "description" => "Framework PHP robuste et moderne",
    ]
];

function toSlug($text)
{
    return strtolower(str_replace([' ', '&'], ['-', 'and'], $text));
}
?>

<main class="flex flex-col justify-center items-center">

    <h2 class="w-fit m-10 font-bold underline decoration-double decoration-sky-500 text-2xl">
        Mes Compétences
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
        <?php foreach ($competences as $competence): ?>
            <div class="text-center p-6 border rounded-xl shadow-md hover:shadow-lg transition-all">
                <div class="flex justify-center gap-4 mb-3">
                    <?php foreach ($competence['nom'] as $logo): ?>
                        <img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= toSlug($logo) ?>/<?= toSlug($logo) ?>-original.svg"
                            alt="Logo <?= $logo ?>"
                            class="w-10 h-10"
                        />
                    <?php endforeach; ?>
                </div>
                <h3 class="font-bold text-lg capitalize">
                    <?= implode(" & ", $competence['nom']) ?>
                </h3>
                <p class="text-gray-600 mt-2"><?= $competence['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
