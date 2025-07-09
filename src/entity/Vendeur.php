<?php
namespace App\Entity;

use App\Entity\EnumType;

class Vendeur extends Personne
{
    private $login;
    private $password;
    private $telephone;

    public function __construct($id, $nom, $prenom, $telephone, $login = '', $password = '')
    {
        parent::__construct($id, $nom, $prenom, EnumType::Vendeur);
        $this->telephone = $telephone;
        $this->login = $login;
        $this->password = $password;
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

    public static function toObject(array $row): static
    {
        return new static(
            $row['id'],
            $row['nom'],
            $row['prenom'],
            $row['telephone'] ?? '',
            $row['login'] ?? '',
            $row['password'] ?? ''
        );
    }
}