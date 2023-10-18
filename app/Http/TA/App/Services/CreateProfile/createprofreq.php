<?php

namespace App\Http\TA\Application\Service\CreateProfile;
use App\Http\TA\Domain\Enum\StatusProfile;

class createprofreq
{
    public function __construct(
        private string $firstname,
        private string $lastname,
        private int $number,
        private StatusProfile $status,
    )
    {
    }
    public function getfirstname(): string
    {
        return $this->firstname;
    }

    public function getlastname(): string
    {
        return $this->lastname;
    }
    public function getnumber(): int {
        return $this->number;
    }
    public function getStatus(): StatusProfile
    {
        return $this->status;
    }
}