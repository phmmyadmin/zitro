<?php

declare(strict_types = 1);

namespace Zitro\Apps\Login\Backend\Controller\Auth;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class AuthPostController
{
    public function __invoke(Request $request): Response
    {
        return new Response('', Response::HTTP_OK);
    }
}
