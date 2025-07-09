<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Service\SecurityService;

class SecurityController extends AbstractController
{
    private SecurityService $SecurityService;

    public function __construct(SecurityService $SecurityService)
    {
       $zey= $this->SecurityService = $SecurityService;
    }
public function login(): void
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         
        try {
            $this->SecurityService->login($_POST);
            header('Location: /commandes/liste'); 
            exit;
        } catch (\Exception $e) {

            $this->renderHtml('security/login.html.php', ['error' => $e->getMessage()]);
        }
    } else {
        $this->renderHtml('security/login.html.php');
    }
}

    public function index() {}
    public function store() {}
    public function create() {}
    public function destroy() {}
    public function show() {}
    public function edit() {}
}
