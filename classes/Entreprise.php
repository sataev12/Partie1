<?php

class Entreprise {
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $contrats;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville)
    {
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->contrats = [];
    }

    
    
    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    



    
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    
    public function getCp(): string
    {
        return $this->cp;
    }

    
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    
    public function getVille(): string
    {
        return $this->ville;
    }

    
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAdresseComplet(){
        return $this->adresse." ".$this->cp." ".$this->ville;
    }

    public function getInfos(){
        return $this->getRaisonSociale()." a été crée le ".$this->getDateCreation()->format("d.m.Y")." 
        et se situe à l'adresse suivant ".$this->getAdresseComplet()."<br>";

    }
    
    public function getContrats()
    {
        return $this->contrats;
    }

    
    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

    public function addContrat(Contrat $contrat) {
        $this->contrats[] = $contrat;
    }

    public function afficherEmployes(){
        $result = "<h2>Employés de $this</h2>";

        foreach ($this->contrats as $contrat) {
            $result.= $contrat->getEmploye()." (".$contrat->getDateEmbauche() .")<br>";
        }

        return $result;
    }

    public function __toString()
    {
        return $this->raisonSociale." (".$this->dateCreation->format("Y").")"."<br>";
    }

}