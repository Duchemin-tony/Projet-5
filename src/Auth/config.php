<?php

use App\Auth\DatabaseAuth;
use App\Auth\ForbiddenMiddleware;
use App\Auth\Mailer\PasswordResetMailer;
use Framework\Auth;

return [
    'auth.login'         => '/login',
    'auth.entity'        => \App\Auth\User::class,
    'twig.extensions'   => \DI\add([
        \Di\get(\App\Auth\AuthTwigExtension::class)
    ]),
    Auth\User::class => \DI\factory(function (Auth $auth) {
        return $auth->getUser();
    })->parameter('auth', \DI\get(Auth::class)),
    Auth::class => \DI\get(DatabaseAuth::class),

    \App\Auth\UserTable::class => \DI\autowire()->constructorParameter('entity', \DI\get('auth.entity')),
    ForbiddenMiddleware::class => \DI\autowire()->constructorParameter('loginPath', \DI\get('auth.login')),
    PasswordResetMailer::class => \DI\autowire()->constructorParameter('from', \DI\get('mail.from'))
];
