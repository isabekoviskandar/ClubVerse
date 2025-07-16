<?php
namespace App\Api\Controllers;

use App\Api\Requests\CreateUserRequest;
use App\Domain\User\Service\UserCreatorService;

class UserController
{
    public function store(CreateUserRequest $request, UserCreatorService $service)
    {
        $user = $service->create($request->validated());
        return response()->json($user);
    }
}
?>