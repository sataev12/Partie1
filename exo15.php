<h1>Exercice 15</h1>

<p>Créer une classe Personne(nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>

$p1 = new Personne("DUPON", "Michel", "1980-02-19");<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
</p>

<?php


Class Ordinateur {
    private $_marque;
    private $_modele;
    private $_ecran;
    private $_statut=0;

    public function allumer(){
        $this->_statut=1;
    }
}
$poste = new Ordinateur();
$poste->allumer();
