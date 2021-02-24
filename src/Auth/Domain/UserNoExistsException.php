<?php


namespace Zitro\Auth\Domain;


use Throwable;

class UserNoExistsException extends \Exception
{
    public function __construct(string $email)
    {
        parent::__construct(sprintf('The user <%s> does not exists', $email));
    }
}