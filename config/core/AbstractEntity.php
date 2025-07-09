<?php

namespace App\Core;

abstract class AbstractEntity
{
    public static abstract function toObject(array $tableau): static;

    public abstract function toArray(Object $object): array;

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}

