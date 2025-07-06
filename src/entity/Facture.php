<?php
namespace App\Entity;
use App\Entity\EnumFacture;
use App\Config\Core\AbstractEntity;

class Facture extends AbstractEntity
{
    private $id;
    private $date;
    private $montant;
    private EnumFacture $statut;

    public function __construct($id, $date, $montant, $statut = EnumFacture::NonPaye)
    {
        $this->id = $id;
        $this->date = $date;
        $this->montant = $montant;
        $this->statut = $statut;
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

    public function getMontant(): float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): void
    {
        $this->montant = $montant;
    }

    public function getStatut(): EnumFacture
    {
        return $this->statut;
    }

    public function setStatut(EnumFacture $statut): void
    {
        $this->statut = $statut;
    }

    public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['date'],
            $row['montant'],
            EnumFacture::from($row['statut'] ?? 'Non Paye')
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'montant' => $this->montant,
            'statut' => $this->statut->value,
        ];
    }
}