<?php
namespace App\Core;

class Middleware
{
   public static function getError(string $key): ?string
   {
       return $_SESSION['errors'][$key] ?? null;
   }
}
