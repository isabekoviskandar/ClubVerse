<?php


namespace App\Domain\Auth\Service;
use App\Domain\Auth\Repository\AuthRepository;
use Illuminate\Http\Request;

class AuthService{

    private $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(Request $request)
    {
        return $this->authRepository->login($request);
    }

    public function register(Request $request)
    {
        return $this->authRepository->register($request);
    }
}