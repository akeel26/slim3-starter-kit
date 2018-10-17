<?php
use Slim\Http\Request;
use Slim\Http\Response;

// default routes
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

// sample controller function
$app->group('/sample', function () {
	$this->get('/test', \App\Controllers\SampleController::class . ':index');
});

// sample db function
$app->get('/users/all', \App\Controllers\UsersController::class . ':index');

