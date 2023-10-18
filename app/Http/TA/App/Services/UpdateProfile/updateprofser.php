<?php

namespace App\Http\TA\Application\Service\UpdateProfile;

use App\Http\TA\Application\Service\UpdateProfile\updateprofreq;
use App\Http\TA\Application\Service\UpdateProfile\updateprofreq\updateprofreq as UpdateprofreqUpdateprofreq;
use App\Http\TA\Domain\Models\Profile;
use App\Http\TA\Domain\Service\Repository\ProfileRepositoryInterface;

class UpdateProfileService
{
    public function __construct(
        private ProfileRepositoryInterface $profile_repository
    )
    {
    }

    public function execute(updateprofreq $request){
        $profile = new Profile(
            $request->getId(),
            $request->getfirstname(),
            $request->getlastname(),
            $request->getnumber(),
            $request->getStatus(),
        );

        $this->profile_repository->persist($profile);
    }
}