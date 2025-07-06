<?php
namespace App\Repository;
use App\Entity\Commande;
use App\Entity\CommandeProduit;

class CommandeRepository extends Database
{
    public function findAll(): array
    {
        $stmt = $this->pdo->query("
            SELECT c.*, cl.nom as client_nom, cl.prenom as client_prenom, 
                   v.nom as vendeur_nom, v.prenom as vendeur_prenom
            FROM commandes c
            JOIN clients cl ON c.client_id = cl.id
            JOIN vendeurs v ON c.vendeur_id = v.id
            ORDER BY c.date DESC
        ");
        $commandes = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $commandes[] = Commande::toObject($row);
        }
        return $commandes;
    }

    public function findById(int $id): ?Commande
    {
        $stmt = $this->pdo->prepare("SELECT * FROM commandes WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        return $row ? Commande::toObject($row) : null;
    }

    public function findProduitsCommande(int $commandeId): array
    {
        $stmt = $this->pdo->prepare("
            SELECT cp.*, p.libelle as produit_libelle
            FROM commande_produits cp
            JOIN produits p ON cp.produit_id = p.id
            WHERE cp.commande_id = ?
        ");
        $stmt->execute([$commandeId]);
        $produits = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $produits[] = CommandeProduit::toObject($row);
        }
        return $produits;
    }

    public function save(object $commande): bool
    {
        if ($commande->getId() === 0) {
            return $this->insert($commande);
        } else {
            return $this->update($commande);
        }
    }

    private function insert(Commande $commande): bool
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO commandes (numero, date, montant, client_id, vendeur_id) 
            VALUES (?, ?, ?, ?, ?)
        ");
        return $stmt->execute([
            $commande->getNumero(),
            $commande->getDate(),
            $commande->getMontant(),
            $commande->getClientId(),
            $commande->getVendeurId()
        ]);
    }

    private function update(Commande $commande): bool
    {
        $stmt = $this->pdo->prepare("
            UPDATE commandes 
            SET numero = ?, date = ?, montant = ?, client_id = ?, vendeur_id = ?
            WHERE id = ?
        ");
        return $stmt->execute([
            $commande->getNumero(),
            $commande->getDate(),
            $commande->getMontant(),
            $commande->getClientId(),
            $commande->getVendeurId(),
            $commande->getId()
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare("DELETE FROM commandes WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getLastInsertId(): int
    {
        return (int)$this->pdo->lastInsertId();
    }
}