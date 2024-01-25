<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir<br>
ce tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé<br>
d'afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);
echo "Il y a $nbMarques marques de voitures dans le tableau : <br>";
foreach ($marques as $tableau) {
    echo "°".$tableau."<br>";
}
