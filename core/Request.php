<?php

namespace app\core;
/*

    Author: Dalitso Tembo
*/

    class Request{

        public function __construct(){}

        // GETTING THE PATH THAT WAS SENT AS A REQUEST
        public function getPath(){
            $path = $_SERVER['REQUEST_URI'] ?? '/';
            $position = strpos($path, '?');

            if($position === false){
                return $path;
            }
            return substr( $path, 0, $position);
        }

        // GETTING THE REQUEST METHOD
        public function getMethod(){
            return strtolower($_SERVER['REQUEST_METHOD']);
        }
    }



?>