<?php


namespace Zitro\Auth\Domain;


class AuthUser
{
    private string $authEmail;
    private string $authPassword;

    public function __construct(string $authEmail, string $authPassword)
    {
        $this->authEmail = $authEmail;
        $this->authPassword = $authPassword;
    }

    public function authEmail(): string
    {
        return $this->authEmail;
    }
    public function passwordMatches($otherPassword): bool
    {
        return $this->authPassword === $otherPassword;
    }
}