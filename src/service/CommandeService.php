<?php

namespace App\Service; 

use App\Entity\Commande;
use App\Repository\CommandeRepository;

class CommandeService
{
    private CommandeRepository $commandeRepository;

    public function __construct(CommandeRepository $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
    }

    public function createCommande($id, $date, $clientId, $montant): Commande
    {
        $commande = new Commande($id, $date, $montant);
        $this->commandeRepository->save($commande);
        return $commande;
    }

    public function getCommandes(): array
    {
        return $this->commandeRepository->findAll();
    }

    public function findCommandeById($id): ?Commande
    {
        return $this->commandeRepository->findById($id);
    }
}