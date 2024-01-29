<h1>Exercice 15</h1>

<p>Créer une classe Personne(nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>

$p1 = new Personne("DUPON", "Michel", "1980-02-19");<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
</p>

<?php


Class Personne {
    private string $nom;
    private string $prenom;
    private $dateNaissance;
    

    public function __construct(string $nom, string $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    
    public function afficheAge() {
        $aujourdui = new DateTime(); //Recuperer la date du jour

        $dateNaissance = new DateTime($this->dateNaissance);

        $differance = $aujourdui->diff($dateNaissance);

        return $differance->y;


    }

}

$p1 = new Personne("Michel", "DUPONT", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
echo $p1->getNom()." ".$p1->getPrenom()." a ".$p1->afficheAge()." ans<br>";
echo $p2->getNom()." ".$p2->getPrenom()." a ".$p2->afficheAge()." ans<br>";

