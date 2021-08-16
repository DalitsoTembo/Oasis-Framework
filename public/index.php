<?php

    require_once(__DIR__.'./../vendor/autoload.php');

    use app\core\Application;
    
    /*
        Author: Dalitso Tembo

    */


    $app = new Application(dirname(__DIR__));

    $app->router->get('/', 'home');

    $app->router->get('/contacts', 'contact');




    $app->run();

?>