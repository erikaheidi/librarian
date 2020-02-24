<?php

require __DIR__ . '/../vendor/autoload.php';

use Minicli\App;
use Minicli\Miniweb\Provider\TwigServiceProvider;
use Minicli\Miniweb\Provider\RouterServiceProvider;
use Minicli\Miniweb\Exception\RouteNotFoundException;
use Librarian\Provider\ContentServiceProvider;
use Librarian\Provider\DevtoServiceProvider;
use Librarian\Provider\LibrarianServiceProvider;
use Minicli\Miniweb\Response;

$app = new App(require __DIR__ . '/../config.php');

$app->addService('twig', new TwigServiceProvider());
$app->addService('router', new RouterServiceProvider());
$app->addService('content', new ContentServiceProvider());
$app->addService('librarian', new LibrarianServiceProvider());
$app->addService('devto', new DevtoServiceProvider());

$app->librarian->boot();

try {
    /** @var RouterServiceProvider $router */
    $route = $app->router->getCallableRoute();
    $app->runCommand(['minicli', 'web', $route]);
} catch (RouteNotFoundException $e) {
    Response::redirect('/notfound');
}