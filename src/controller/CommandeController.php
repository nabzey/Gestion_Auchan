<?php
namespace App\Controller;

use App\Core\AbstractController;

class CommandeController extends AbstractController{
   
    public function index(){
        
            $this->renderHtml('Liste.html.php'); // ✅ Juste le nom du fichier
    }
    public function store(){

    }
    public function create(){
                $this->renderHtml('Form.html.php');

    }
    public function destroy(){

    }
    public function show(){
    }
    public function edit(){

    }
    public function update(){
    }
}