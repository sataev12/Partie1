<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat,<br>
écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie<br>
en nombre de billets de 10 € et 5 €, de pièces de 2€ et 1€.</p>

<h2>Résultat</h2>

<?php

//Declarations des variables

$montantPayer = 152;
$montantVerse = 200;
$renduMonnaie = $montantVerse - $montantPayer;
echo "Montant à payer : $montantPayer €<br>";
echo "Montant versé : $montantVerse €<br>";
echo "Reste à payer : $renduMonnaie €<br>";
echo " * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ";

$resultBillet10 = floor($renduMonnaie / 10);

//Les conditions pour fractionner les pieces


if (1 <= $resultBillet10) {
    echo "<br>Rendue de monnaie : <br>
    $resultBillet10 billets de 10 € - ";
    $rRestant10 = $renduMonnaie % 10;
    //echo "<br>".$rRestant10."<br>";
    $resultBillet5 = $rRestant10 / 5;
    if (1 <= $resultBillet5) {
        echo floor($resultBillet5)." billets de 5 € -";
        $rRestant5 = $rRestant10 % 5;
        //echo "<br>".$rRestant5;
        $resultBillet2 = floor($rRestant5 / 2);
        //echo "<br>".$resultBillet2;
    }
    if(1 <= $resultBillet2) {
        echo $resultBillet2." pièce de 2 € - ";
        $rRestant2 = $rRestant5 % 2;
        //echo "<br>".$rRestant2;
        $resultBillet1 = floor($rRestant2 / 1);
        //echo "<br>".$resultBillet1;
    }if (1 <= $resultBillet1) {
        echo $resultBillet1." pièce de 1 €";
        $rRestant1 = $$rRestant2 % 1;
        //echo "<br>".$rRestant1;
    }
}





