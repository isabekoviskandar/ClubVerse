<?php
namespace App\Domain\User\Service;

use App\Domain\User\Model\User;
use Illuminate\Support\Facades\Hash;

class UserCreatorService
{
    public function create(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }
}
?>