<h1>POO Entreprise</h1>

<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});

$elanFormation = new Entreprise("Elan Formation", "1993-01-01", "14 rue du Rône", "67100", "STRASBOURG");
$tf1 = new Entreprise("tf1", "1970-01-01", "13 rue de Seine", "75000", "PARIS");
$poleEmploi = new Entreprise("Pole Emploi", "2000-01-01", "1 avenue de la Gare", "67000", "STRASBOURG");

$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr");
$mickael = new Employe("MURMANN", "Mickael", "mickael@elan-formation.fr");

$c1 = new Contrat($elanFormation, $stephane, "2020-01-01");
$c2 = new Contrat($elanFormation, $mickael, "2010-01-01");
$c3 = new Contrat($tf1, $stephane, "2022-01-01");
$c4 = new Contrat($poleEmploi, $stephane, "2023-01-01");


echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $poleEmploi->afficherEmployes();