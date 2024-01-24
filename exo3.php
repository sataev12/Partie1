<h1>A partit de la phrase de l'exercices 1, écrire l'instruction permettant<br>
de remplacer le mot "aujourd'hui" par le mot "demain". <br>
Afficher l'ancienne et la nouvelle phrase. </h1>

<p></p>

<h2>Résultat</h2>

<?php

$anciennePhrase = "Notre formation DL commence aujourd'hui";

$motRemplace = "aujourd'hui";
$newMot = "demain";

$phraseModifie = str_replace($motRemplace, $newMot, $anciennePhrase);

echo "Voici ancienne phrase; $anciennePhrase <br> et la phrase modifié; $phraseModifie";