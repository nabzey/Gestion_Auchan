<?php
namespace App\Entity;
use src\config\Core\AbstractEntity;
use App\Entity\Type; // Corrigé: import correct

class Personne extends AbstractEntity
{
    private $id;
    private $nom;
    private $prenom;
    protected Type $type; 

    public function __construct($id = 0, $nom = "", $prenom = "")
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['nom'], 
            $row['prenom']    
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
        ];
    }

    public function getType(): Type
    {
        return $this->type;
    }
}
