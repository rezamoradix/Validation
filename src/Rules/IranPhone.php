<?php

namespace Rey\Validation\Rules;

class IranPhone 
{
    public function irphone($value): bool
    {
        return preg_match('/^09\d{9}$/', $value);
    }

    public function iranphone($value): bool
    {
        return $this->irphone($value);
    }

    public function iran_phone($value): bool
    {
        return $this->irphone($value);
    }
}
