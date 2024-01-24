<?php

$tableau1 = array("texte 1", "texte 2", "texte 3");
$tableau2 = ["texte 1", "texte2"];


$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);

$moyenne = round($sommeNotes / $nbNotes, 2);

echo "la moyenne est $moyenne<br>";

//OPerations mathematique

$nbArticle = 5;
$prixHT = 10.99;
$totalHT = $nbArticle * $prixHT;

echo "le total HT est de $totalHT € euros <br>";

// Afficher le total TTC d'une facture

$tauxTVA = 0.20;
$totalTTC = $totalHT + $nbArticle * $prixHT * $tauxTVA;
$totalTTC2 = $totalHT *(1 + $tauxTVA);

echo $totalTTC;
echo "<br>$totalTTC2";


//
$tex = "texte";

//Renvoi le type de variable specifiee en parametre
echo gettype($totalTTC);

var_dump($totalTTC2);

//Structure de controle

//Condition (IF = SI)

$prenom = "Georges";
$age = 17;

if($age < 18){
    $result = "mineur";
}else{
    $result = "majeur";
}

echo "<br>$prenom est $result<br>";

//Ternaire

$result = $age >= 18 ? "majeur" : "mineur"; 
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

//En fonction de l'age, afficher une categorie

/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinoin JUNIOR
*/  

$ages = 5.5;

if(gettype($ages) == "double" || gettype($ages) == "integer"){

    if($ages >= 30){
        $resultat = "senior";
    }else if($ages >= 20){
        $resultat = "cadet";
    }else{
        $resultat = "Junior";
    }

    echo "la personne qui a $ages ans est : $resultat<br>";

} else {
    echo "Saisisez bien votre age numérique ! <br>";
}

/*
    si la valeur 1 --> OK !
    si la valeur 0 --> KO !
    sinon afficher "valeur non gérée"
*/

$valeur = 0;
switch($valeur){
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée ! <br>";
}

$age1 = 22;
if (gettype($age1) == "double" || gettype($age1) == "integer"){

    switch (true) {
        case $age1 >= 30: echo "Senior <br>"; break;
        case $age1 >= 20: echo "Cadet <br>"; break;
        default: echo "Junior <br>";
    }
}else{
    echo "Veillez saisir un age numerique !<br>";
}

//BOUCLE (loop)

// Afficher les chifres de 1 à 10

//FOR (pour)
//$i++ --> $i = $i + 1


for($i = 1; $i <= 10; $i++){
    echo $i." ";
}

//WHILE(tant que)

$i = 1;
while($i <= 10){
    echo $i." ";
    $i++; 
}

// FOREACH

// $range = range(1,10);
// var_dump($range);

//foreach (range(1,10) as $valeur) {
    echo $valeur." ";
//}

echo "<br>";

$marque = ["mercedes", "bmw", "toyota", "tesla"];
$nbMarque = count($marque);

echo "<h3>Method for</h3>";

for ($i=0;$ $i < $nbMarque; $i++) { 
    echo $marque[$i]."<br>";
}

echo "<h3>Method while</h3>";
// $i = 0;
// while ($i < $nbMarque) {
//     echo $marque[$i]."<br>";
//     $i++;
// }

echo "<h3>Method for</h3>";