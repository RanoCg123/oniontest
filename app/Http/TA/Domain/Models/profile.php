<?php

namespace App\Http\TA\Domain\Models;

use App\Http\TA\Domain\Enum\StatusProfile;

class Profile
{
    public function __construct(
        private ?int $id,
        private string $firstname,
        private string $lastname,
        private int $number,
        private StatusProfile $status,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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