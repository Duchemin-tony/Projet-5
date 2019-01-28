<?php

use App\Admin\AdminModule;
use App\Contact\ContactModule;
use App\Auth\AuthModule;
use App\Blog\BlogModule;
use Framework\Auth\RoleMiddlewareFactory;
use Framework\Middleware\CsrfMiddleware;
use Framework\Middleware\{
    DispatcherMiddleware,
    MethodMiddleware,
    RouterMiddleware,
    TrailingSlashMiddleware,
    NotFoundMiddleware
};
use GuzzleHttp\Psr7\ServerRequest;
use Middlewares\Whoops;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = (new \Framework\App(dirname(__DIR__) . '/config/config.php'))
    ->addModule(AdminModule::class)
    ->addModule(ContactModule::class)
    ->addModule(BlogModule::class)
    ->addModule(AuthModule::class)
    ->addModule(\App\Account\AccountModule::class);

$container = $app->getContainer();
$app->pipe(Whoops::class)
    ->pipe(TrailingSlashMiddleware::class)
    ->pipe(\App\Auth\ForbiddenMiddleware::class)
    ->pipe(
        $container->get('admin.prefix'),
        $container->get(RoleMiddlewareFactory::class)->makeForRole('admin')
    )
    ->pipe(MethodMiddleware::class)
    ->pipe(CsrfMiddleware::class)
    ->pipe(RouterMiddleware::class)
    ->pipe(DispatcherMiddleware::class)
    ->pipe(NotFoundMiddleware::class);

if (php_sapi_name() !== "cli") {
    $response = $app->run(ServerRequest::fromGlobals());
    \Http\Response\send($response);
}
