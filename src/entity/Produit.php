<?php
namespace App\Entity;
use src\config\Core\AbstractEntity;


class Produit extends AbstractEntity
{
    private $id;
    private $libelle;
    private $prix;
    private $quantitestock;

     public function __construct($id, $libelle, $prix, $quantitestock)
     {
         $this->id = $id;
         $this->libelle = $libelle;
         $this->prix = $prix;
         $this->quantitestock = $quantitestock;
     }

    public function getId():int
    {
        return $this->id;  }
   public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function getQuantitestock(): int
    {
        return $this->quantitestock;
    }

    public function setQuantitestock(int $quantitestock): void
    {
        $this->quantitestock = $quantitestock;
    }
     public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['libelle'],
            $row['prix'],
            $row['quantitestock']
        );  
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'prix' => $this->prix,
            'quantitestock' => $this->quantitestock,
        ];
    }   

}