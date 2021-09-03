<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    require_once(__DIR__.'./../vendor/autoload.php');

    use app\controllers\AuthControllers;
    use app\controllers\SiteController;
    use app\core\Application;
    
    /*
        Author: Dalitso Tembo

    */


    $app = new Application(dirname(__DIR__));

    $app->router->get('/', [SiteController::class, 'showHome']);

    $app->router->get('/contacts', [SiteController::class, 'showContact']);

    $app->router->post('/contacts', [SiteController::class, 'handleContact']);


    $app->router->get('/login', [AuthController::class, 'login']);
    $app->router->post('/login', [AuthController::class, 'login']);

    $app->router->get('/signup', [AuthController::class, 'signup']);
    $app->router->post('/signup', [AuthController::class, 'signup']);




    $app->run();

?>