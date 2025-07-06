<?php

 namespace App\Core;

 class ValidatorStatic
 {
    public static function personne (array $data): array
    {
        $errors = [];

        if (empty($data['nom'])) {
            $errors[] = 'Le nom est obligatoire.';
        }

        if (empty($data['prenom'])) {
            $errors[] = 'Le prénom est obligatoire.';
        }

        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L\'email est invalide.';
        }
        return $errors;
    }
 }