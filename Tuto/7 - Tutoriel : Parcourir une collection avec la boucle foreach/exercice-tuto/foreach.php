<?php
$articles = [
    ['titre' => 'Premier article'],
    ['titre' => 'Deuxième article']
];

// $texte = "Découvrir <strong>HTML & PHP</strong>";
// echo htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');

$texte = "Voici un texte très long qui doit être raccourci pour l'affichage dans une carte.";
$date = "2026-02-14";

echo substr($texte, 0, 30) . "... le " . date('d M Y', strtotime($date));

?>


<ul>
<?php foreach ($articles as $article): ?>
        <li><?= $article['titre']?></li>
<?php endforeach;?>
</ul>

