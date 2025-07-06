<?php


namespace App\Entity;

enum Type: string {
    case Vendeur = 'vendeur';
    case Client = 'client';
}