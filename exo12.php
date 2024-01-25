<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée<br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue<br>
respective (français -> "Salut", anglais -> "Hello", espagnol -> "Hola")</p>

<h2>Résultat</h2>

<?php

//Creation de tableau
$tableau = [
    "Mickael" => "Salut",
    "Virgile" => "Hola",
    "Marie-Claire" => "Hello"
];

//Trier de A-Z
ksort($tableau);

//Boocle
foreach ($tableau as $prenom => $associationsLangue) {
    echo "$associationsLangue $prenom<br>";
}