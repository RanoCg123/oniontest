<?php

namespace App\Http\TA\Application\Service\CreateProfile;

use App\Http\TA\Application\Service\CreateProfile\createprofreq;
use App\Http\TA\Domain\Models\Profile;
use App\Http\TA\Domain\Service\Repository\ProfileRepositoryInterface;

class CreateProfileService
{
    public function __construct(
        private ProfileRepositoryInterface $profile_repository
    )
    {
    }

    public function execute(createprofreq $request){
        $profile = new Profile(
            null,
            $request->getfirstname(),
            $request->getlastname(),
            $request->getnumber(),
            $request->getStatus(),
        );

        $this->profile_repository->persist($profile);
    }
}