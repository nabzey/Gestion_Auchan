<?php
namespace App\Core;

abstract class AbstractController
{
    abstract public function index();
    abstract public function store();
    abstract public function create();
    abstract public function destroy();
    abstract public function show();
    abstract public function edit();

    protected function renderHtml(string $view)
    {
        ob_start();
        require_once __DIR__ . '/../../templates/commandes/' . $view;
        $contentForLayout = ob_get_clean();

        require_once __DIR__ . '/../../templates/layout/layout.security.php';
    }
}
