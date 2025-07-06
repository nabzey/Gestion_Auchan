<?php
namespace App\Controller;

use App\Core\AbstractController;

class LoginSecurity extends AbstractController
{
    public function index()
    {
        $this->renderHtml('login.html');
    }

    public function store()
    {
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($login === 'zeynab@gmail.com' && $password === 'admin123') {
            header('Location: /Liste');
            exit;
        } else {
            $error = "Identifiants invalides";
            $this->renderHtmlWithError('templates/commandes/login.html', $error);
        }
    }

    private function renderHtmlWithError($view, $error)
    {
        ob_start();
        $error = $error; 
        require_once '../templates/' . $view;
        $contentForLayout = ob_get_clean();
        require_once '../templates/layout/layout.security.php';
    }

    public function create() {}
    public function destroy() {}
    public function show() {}
    public function edit() {}
}