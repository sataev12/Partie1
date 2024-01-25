<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<?php

$dateNaissance = date_create("17-01-1985"); //La date de naissance
$aujourdui = date_create(); //Recuperer la date du jour

$interval = date_diff($dateNaissance, $aujourdui); //Interval entre les 2 dates

echo $interval->format("Age de la personne : %y ans-%m mois-%d jours "); //Affichage
