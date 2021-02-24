<?php

declare(strict_types = 1);

namespace Zitro\Apps\Login\Backend\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    private $generator;

    public function __invoke(Request $request): Response
    {
        return new JsonResponse(
            [
                'login-backend' => 'ok',
            ]
        );
    }
}
