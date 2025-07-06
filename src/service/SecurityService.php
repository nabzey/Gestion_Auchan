<?php

namespace App\Service;

use App\Core\AbstractController;
use App\Service\SecurityService;


class SecurityController extends AbstractController
{
    private SecurityService $securityService;

    public function __construct()
    {
        $this->securityService = new SecurityService(); // Assure-toi qu'il n'attend pas d'arguments ou injecte PersonneRepository
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->securityService->login($_POST); // tentative de connexion
                header('Location: /commandes/liste');  // accès autorisé
                exit;
            } catch (\Exception $e) {
                // erreur d'identifiants : on reste sur la page login avec un message d'erreur
                $this->renderHtml('login.html', [
                    'error' => $e->getMessage()
                ]);
                return;
            }
        }

        // GET: afficher simplement le formulaire
        $this->renderHtml('login.html');
    }
}
