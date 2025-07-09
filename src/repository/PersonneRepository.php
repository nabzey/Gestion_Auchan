<?php

namespace App\Repository;

use App\Core\Database;
use App\Entity\Personne; 
use App\Entity\Vendeur;
use App\Entity\EnumType;
use App\Entity\Client;

class PersonneRepository
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function selectAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM personne");
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $personnes = [];
        foreach ($rows as $row) {
            $personnes[] = $this->mapToEntity($row);
        }
        return $personnes;
    }

    public function findById(int $id): ?Personne
    {
        $stmt = $this->pdo->prepare("SELECT * FROM personne WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $row ? $this->mapToEntity($row) : null;
    }

    public function findByEmail(string $email): ?Personne
    {
        $stmt = $this->pdo->prepare("SELECT * FROM personne WHERE email = ?");
        $stmt->execute([$email]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $row ? $this->mapToEntity($row) : null;
    }

    private function mapToEntity(array $row): Personne
    {
        if ($row && strtolower($row['type']) === strtolower(EnumType::Vendeur->value)) {
            return Vendeur::toObject($row);
        } elseif ($row && strtolower($row['type']) === strtolower(EnumType::Client->value)) {
            return Client::toObject($row);
        }
        return Personne::toObject($row);
    }
}
