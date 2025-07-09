<?php
namespace App\Controller;
use App\Core\AbstractController;
use App\Service\SecurityService;
use App\Core\ValidatorStatic;

class LoginSecurity extends AbstractController
{
    private SecurityService $service;

    public function __construct()
    {
        $this->service = new SecurityService(); 
    }

    public  function index()
    {
        $this->renderHtml('login.html.php', [
            'errorMessage' => '',
        ]);
    }

    public  function store()
    {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        ValidatorStatic::isEmpty($key = 'email', $value = $email, $message = "L'email est obligatoire."); 
         ValidatorStatic::isEmpty($key = 'password', $value = $password, $message = "Le mot de passe est obligatoire.");    
         $user = $this->service->findByEmail($email);
        if (!$user) {
            ValidatorStatic::isEmail($key = 'email', $value = $email, $message = "L'email n'est pas valide.");
            $this->renderHtmlWithError('login.html.php', "Email ou mot de passe incorrect.");
            exit;
        }
        if ($password == $user->getPassword()) {
            session_start();
            header('Location: /commandes/liste');
            exit;
        } 
        $this->renderHtmlWithError('login.html.php', "Email ou mot de passe incorrect.");
    }
    private function renderHtmlWithError(string $view, string $error)
    {
        ob_start();
        $errorMessage = $error;
        require_once __DIR__ . '/../../templates/commandes/' . $view;
        $contentForLayout = ob_get_clean();

        require_once __DIR__ . '/../../templates/layout/layout.security.php';
    }

    public function create() {}
    public function destroy() {}
    public function show() {}
    public function edit() {}
}
