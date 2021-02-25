<?php

declare(strict_types = 1);

namespace Zitro\Apps\Login\Backend\Controller\Auth;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class AuthGetWebController
{
    public function __invoke(Request $request)
    {
        return new Response(file_get_contents(__DIR__ . '/../../../../frontend/index.html'));
    }
}
