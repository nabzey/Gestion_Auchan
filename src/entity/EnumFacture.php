<?php

namespace App\Entity;

enum EnumFacture: string {
    case Paye = 'Paye';
    case NonPaye = 'Non Paye';
}