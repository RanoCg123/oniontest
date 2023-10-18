<?php

namespace App\Http\TA\Domain\Service\Repository;

use App\Http\TA\Domain\Models\Profile;

interface ProfileRepositoryInterface
{
    public function persist(Profile $profile);
    public function getById(int $profile_id): ?Profile;

}