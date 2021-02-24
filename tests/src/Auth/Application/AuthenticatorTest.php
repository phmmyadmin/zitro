<?php


namespace Zitro\Tests\Auth\Application;


use PHPUnit\Framework\TestCase;
use Zitro\Auth\Application\Authenticator;
use Zitro\Auth\Domain\AuthRepository;
use Zitro\Auth\Domain\AuthUser;

class AuthenticatorTest extends TestCase
{
    /** @test */
    public function it_should_authenticate_a_valid_user(): void
    {
        $repository = $this->createMock(AuthRepository::class);
        $authenticator = new Authenticator($repository);

        $authEmail = 'gayarre.pablo@gmail.com';
        $authPassword = '123456789';

        $authUser = new AuthUser($authEmail, $authPassword);

        $repository->method('search')
                    ->with($authEmail)
                    ->willReturn($authUser);

        $authenticator($authEmail, $authPassword);

    }
}