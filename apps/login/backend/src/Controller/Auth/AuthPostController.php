<?php

declare(strict_types = 1);

namespace Zitro\Apps\Login\Backend\Controller\Auth;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zitro\Auth\Application\Authenticator;

final class AuthPostController
{

    private Authenticator $authenticator;

    public function __construct(Authenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function __invoke(Request $request): Response
    {
        try {
            ($this->authenticator)($request->get('email'), $request->get('password'));
            $rc = Response::HTTP_OK;
        } catch (\Exception $exception) {
            $rc = Response::HTTP_UNAUTHORIZED;
        } finally {
            return new Response('', $rc);
        }
    }
}
