<?php

namespace Zitro\Auth\Infrastructure;

use Zitro\Auth\Domain\AuthRepository;
use Zitro\Auth\Domain\AuthUser;

class InMemoryAuthRepository //implements AuthRepository
{
    private const USERS = [
        'gayarre.pablo@gmail.com' => '123456789',
    ];

    public function search(string $authEmail): ?AuthUser
    {
        $password = self::USERS[$authEmail];

        return null !== $password ? new AuthUser($authEmail, $password) : null;
    }
}