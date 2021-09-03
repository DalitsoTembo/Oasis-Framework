<?php

namespace app\core;


use app\core\Application;

class Controller{


        /**
         * @return: renderView;
         * @param: $view (String)
         * @param: $params (Array)
         * 
         */
        public function render($view, $params=[]){

            return Application::$app->router->renderView($view, $params);

        }

    }


?>