<?php

class Entreprise {
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville)
    {
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
    }

    
    


}