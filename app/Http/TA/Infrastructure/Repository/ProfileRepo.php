<?php

namespace App\Http\TA\Infrastructure\Repository;

use App\Http\TA\Domain\Models\Profile;
use App\Http\TA\Domain\Service\Repository\ProfileRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function persist(Profile $topik)
    {
        $data = $this->createPayload($topik);
        DB::table('profiles')->upsert(
            $data,
            'id'
        );
    }

    public function getById(int $topik_id): ?Profile
    {
        // TODO: Implement getById() method.
    }

    private function createPayload(Profile $topik)
    {
        return [
            'id' => $topik->getId(),
            'firstname' => $topik->getfirstname(),
            'lastname' => $topik->getlastname(),
            'number' => $topik->getnumber(),
            'status' => $topik->getStatus()->value,
        ];
    }
}