<?php

namespace Zitro\Auth\Infrastructure;

use Zitro\Auth\Domain\AuthRepository;
use Zitro\Auth\Domain\AuthUser;

class XmlAuthRepository implements AuthRepository
{
    private const FILE_PATH = __DIR__ . '/../../../users.xml';

    public function search(string $authEmail): ?AuthUser
    {
        if (null === $authEmail || "" === $authEmail)
            return null;

        $sxml = new \SimpleXMLElement(file_get_contents(self::FILE_PATH));
        $password = $sxml->xpath("//user[email='$authEmail']/password/text()");

        return null !== $password ? new AuthUser($authEmail, reset($password)) : null;
    }
}