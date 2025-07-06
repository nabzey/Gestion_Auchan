<?php
namespace App\Entity;

 namespace App\Entity;

class Vendeur extends Personne
{
    private $login;
    private $password;
    private $telephone;

    public function __construct($id, $nom, $prenom, $telephone, $login = '') 
    {
        parent::__construct($id, $nom, $prenom);
        $this->telephone = $telephone;
        $this->login = $login;
        $this->type = Type::Vendeur; 
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void 
    {
        $this->telephone = $telephone;
    }

    public function getLogin(): string 
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}