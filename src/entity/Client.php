<?php
 namespace App\Entity;

class Client extends Personne
{
    private $telephone;
    private array $arrayCommande = [];

    public function __construct($id = 0, $nom = "", $prenom = "", $telephone = "") 
    {
        parent::__construct($id, $nom, $prenom);
        $this->telephone = $telephone;
        $this->type = Type::Client; // Corrigé: était Type::CLIENT
    }

    public function getTelephone(): string 
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void 
    {
        $this->telephone = $telephone;
    }

    public function addCommande(Commande $commande): void 
    {
        $this->arrayCommande[] = $commande;
    }

    public function getArrayCommande(): array 
    {
        return $this->arrayCommande;
    }
}