<?php
namespace App\Entity;
use src\config\Core\AbstractEntity;

class Paiement extends AbstractEntity
{
     private $id;
     private $date;
     private $numero;  
     private $montantverser;
     
     
        public function __construct($id, $date, $numero, $montantverser)
        {
            $this->id = $id;
            $this->date = $date;
            $this->numero = $numero;
            $this->montantverser = $montantverser;
        }

      public function getId():int
      {
          return $this->id;
      }
      public function setId(int $id):void
      {
          $this->id = $id;  }

        public function getDate():string
        {
            return $this->date;
        }
        public function setDate(string $date):void
        {
            $this->date = $date;    }

        public function getNumero():string
        {
            return $this->numero;   }
        public function setNumero(string $numero):void
        {
            $this->numero = $numero;  }
        public function getMontantVerser():float
        {
            return $this->montantverser;  }

        public function setMontantVerser(float $montantverser):void
        {
            $this->montantverser = $montantverser;  }

        public static function toObject(array $row): static  {
            return new static(
                $row['id'],
                $row['date'],
                $row['numero'],
                $row['montantverser']
            );}
            public function toArray(): array
            {
                return [
                    'id' => $this->id,
                    'date' => $this->date,
                    'numero' => $this->numero,
                    'montantverser' => $this->montantverser,
                ];
            }
}