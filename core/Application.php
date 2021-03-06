<?php

    namespace app\core;

    /*
        Author: Dalitso Tembo

    */

    class Application{

        public static Application $app;
        public static string $ROOT_DIR;
        public Router $router;
        public Request $request;
        public Response $response;


        /**
         * @param: String $rootPath: Is the root path of the project. 
         * 
         */
        public function __construct($rootPath){
            self::$ROOT_DIR = $rootPath;
            self::$app = $this;
            $this->request = new Request();
            $this->response = new Response();
            $this->router = new Router($this->request, $this->response);
        }

        // Method that is going to be called when an application is to be run
        public function run(){
            echo $this->router->resolve();
        }

    }

?>