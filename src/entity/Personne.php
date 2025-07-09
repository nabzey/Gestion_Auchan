<?php
namespace App\Entity;
use App\Core\AbstractEntity;
use App\Entity\EnumType; 

class Personne extends AbstractEntity
{
    private $id;
    private $nom;
    private $prenom;
    protected EnumType $type; 

    public function __construct($id = 0, $nom = "", $prenom = "", $type = EnumType::Vendeur)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type = $type;
    }
    public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['nom'], 
            $row['prenom']    
        );
    }

    public function toArray(object $object): array
{
    return [
        'id' => $this->id,
        'nom' => $this->nom,
        'prenom' => $this->prenom,
    ];
}

    public function getType(): EnumType
    {
        return $this->type;
    }
}
