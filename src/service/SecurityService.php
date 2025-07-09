<?php

namespace App\Service;

use App\Repository\PersonneRepository;

class SecurityService 
{
    private PersonneRepository $personneRepository;

    public function __construct()
    {
        $this->personneRepository = new PersonneRepository(); 
    }

    public function seConnecter($login, $password): void
    {
        $user = $this->findByEmail($login);
       
    }


    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->securityService->login($_POST); 
                header('Location: /commandes/liste');  
                exit;
            } catch (\Exception $e) {
                $this->renderHtml('login.html.php', [
                    'error' => $e->getMessage()
                ]);
                return;
            }
        }

        $this->renderHtml('login.html.php');
    }
    
    public function findByEmail(string $email)
    {
        return $this->personneRepository->findByEmail($email);
    }
}
