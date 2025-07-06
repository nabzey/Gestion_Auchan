<?php

namespace App\Entity;
use App\Entity\Client;
use App\Entity\Facture;
use App\Entity\Vendeur;
use App\Config\Core\AbstractEntity;

class Commande extends AbstractEntity
{
    private $id;
    private $date;
    private $montant;
    
    private Client $clientId;
    private Vendeur $vendeurId;
    private ?Facture $factureId = null;
    private array $produitCommande = [];

    public function __construct($id = 0, $date = '', $montant = 0.0, $vendeurId = null)
    {
        $this->id = $id;
        $this->date = $date;
        $this->montant = $montant;
        $this->clientId = new Client();
        if ($vendeurId) {
            $this->vendeurId = $vendeurId;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getVendeurId(): Vendeur
    {
        return $this->vendeurId;
    }

    public function setVendeurId(Vendeur $vendeurId): void
    {
        $this->vendeurId = $vendeurId;
    }

    public function getMontant(): float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): void
    {
        $this->montant = $montant;
    }

    public function getClientId(): Client
    {
        return $this->clientId;
    }

    public function setClientId(Client $clientId): void
    {
        $this->clientId = $clientId;
    }

    public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['date'],
            $row['montant']
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'montant' => $this->montant,
        ];
    }
}