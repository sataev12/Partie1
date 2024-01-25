<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau<br>
(pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

//Creation de tableau
$notes = [
    10, 12, 8, 19, 3, 16, 11, 13, 9
];

//Somme et nombre de notes
$sommeNotes = array_sum($notes);
$nbNotes = count($notes);

echo "Les notes obtenues par l'élève sont : ";

//Une boocle pour parcourir notre tableau
foreach ($notes as $tableau) {
    echo $tableau." ";
}

//Notes moyenne
$noteMoyenne = round($sommeNotes/$nbNotes, 2);

echo "<br>Sa moyenne générale est donc de : $noteMoyenne";