<?php


namespace Zitro\Auth\Domain;


interface AuthRepository
{
    public function search(string $authEmail): ?AuthUser;
}