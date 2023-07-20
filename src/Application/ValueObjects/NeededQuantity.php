<?php

namespace App\Application\ValueObjects;

use App\Application\Exceptions\InvalidCommandException;

readonly class NeededQuantity
{

    public function __construct(private ?int $value)
    {
        $this->validate();
    }

    /**
     * @return void
     * @throws InvalidCommandException
     */
    private function validate(): void
    {
        if ($this->value <= 0 && !is_null($this->value) ) {
            throw new InvalidCommandException("La quantité de fruits doit être supérieure à 0 !");
        }
    }

    public function value():?int
    {
        return $this->value;
    }
}