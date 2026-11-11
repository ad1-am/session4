<?php
$articles = [
    [
        'id' => 1,
        'titre' => 'Comment bien débuter avec Tailwind CSS en 2026 ?',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design...',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],
    [
        'id' => 2,
        'titre' => 'importance des micro-interactions',
        'contenu' => 'Une interface belle n\'est pas suffisante...',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design UI/UX',
        'categorie_couleur' => 'rose'
    ],[
        'id' => 3,
        'titre' => 'Gérer une équipe de développeurs en Full Remote',
        'contenu' => 'Les méthodes agiles et les rituels essentiels pour maintenir la cohésion de groupe ...',
        'image' => 'article-example.png',
        'date_creation' => '05 02 2026',
        'categorie_libelle' => 'Management',
        'categorie_couleur' => 'vert'
    ]
];

echo "Article 1 : " . $articles[0]['titre'] . " (" . $articles[0]['categorie_libelle'] . ")<br>";
echo "Article 2 : " . $articles[1]['titre'] . " (" . $articles[1]['categorie_libelle'] . ")<br>";
echo "Article 3 : " . $articles[2]['titre'] . " (" . $articles[2]['categorie_libelle'] . ")<br>";