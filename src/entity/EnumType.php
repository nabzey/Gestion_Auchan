<?php


namespace App\Entity;
use App\Entity\EnumType;


enum EnumType: string {
    case Vendeur = 'vendeur';
    case Client = 'client';
}