<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercices 1, écrire l'instruction <br>
permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);

echo "La phrase $phrase contient $nbMots mots";