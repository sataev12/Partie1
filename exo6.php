<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture<br>
à reglere à partir de la quantité d'article, son prix hors taxe et un taux de TVA</p>

<h2>Résultat</h2>

<?php

$priceOneArticle = 9.99;
$quantite = 5;
$tauxTVA = 0.2;


//calcul du montant hors taxe
$horsTaxe = $quantite * $priceOneArticle;
//Calcul du montant de la TVA
$montantTVA = $horsTaxe * $tauxTVA;
//Montant total à payer
$totalPrice = $horsTaxe + $montantTVA;
//Affichage du résultat
echo "Prix unitaire de l'article : $priceOneArticle<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de: $totalPrice €";