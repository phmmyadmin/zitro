<?php


namespace Zitro\Auth\Domain;


use Throwable;

class PasswordNoMatchesException extends \Exception
{
    public function __construct()
    {
        parent::__construct(sprintf('The password does not match'));
    }
}