<?php
namespace App\Entity;

use src\config\Core\AbstractEntity;

class AssociationClasse extends AbstractEntity
{
    private $id;
    private $montant;
    private $quantite;
    private Produit $produit;
    private Commande $commande;

    public function __construct($id, $montant, $quantite)
    {
        $this->id = $id;
        $this->montant = $montant;
        $this->quantite = $quantite;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getMontant(): float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): void
    {
        $this->montant = $montant;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function getProduit(): Produit
    {
        return $this->produit;
    }

    public function setProduit(Produit $produit): void
    {
        $this->produit = $produit;
    }

    public function getCommande(): Commande
    {
        return $this->commande;
    }

    public function setCommande(Commande $commande): void
    {
        $this->commande = $commande;
    }
}