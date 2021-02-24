<?php


namespace Zitro\Auth\Application;


use Zitro\Auth\Domain\AuthRepository;
use Zitro\Auth\Domain\AuthUser;
use Zitro\Auth\Domain\PasswordNoMatchesException;
use Zitro\Auth\Domain\UserNoExistsException;

class Authenticator
{
    private AuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $authEmail, $authPassword): void
    {
        $authUser = $this->repository->search($authEmail);

        $this->ensureUserExists($authUser, $authEmail);
        $this->ensureCredentialsAreValid($authUser, $authPassword);
    }

    public function ensureUserExists(AuthUser $authUser , string $authEmail): void
    {
        if (null === $authUser)
            throw new UserNoExistsException($authEmail);

    }

    public function ensureCredentialsAreValid(AuthUser $authUser , string $authPassword): void
    {
        if (! $authUser->passwordMatches($authPassword))
            throw new PasswordNoMatchesException($authPassword);
    }
}