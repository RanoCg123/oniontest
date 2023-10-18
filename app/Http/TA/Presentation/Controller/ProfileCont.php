<?php

namespace App\Http\TA\Presentation\Controller;

use App\Http\Controllers\Controller;
use App\Http\TA\Application\Service\CreateProfile\CreateProfileService;
use App\Http\TA\Application\Service\CreateProfile\createprofreq;
use App\Http\TA\Application\Service\UpdateProfile\UpdateProfileService;
use App\Http\TA\Application\Service\UpdateProfile\updateprofreq;
use App\Http\TA\Domain\Enum\ProfileStatus;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(
        private CreateProfileService $create_topik_service,
        private UpdateProfileService $update_topik_service
    )
    {
    }

    public function createTopik(Request $request){
        $request = new createprofreq(
            $request->input('firstname'),
            $request->input('lastname'),
            $request->input('number'),
            ProfileStatus::tryFrom($request->input('status')),
        );

        return $this->executeService($this->create_topik_service, $request);
    }
    public function updateTopik(Request $request){
        $request = new createprofreq(
            $request->input('id'),
            $request->input('firstname'),
            $request->input('lastname'),
            $request->input('number'),
            ProfileStatus::tryFrom($request->input('status')),
        );

        return $this->executeService($this->update_topik_service, $request);
    }
}