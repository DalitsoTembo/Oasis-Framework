<?php

namespace app\core;
/*

    @Author: Dalitso Tembo
    @Pa
*/

    class Request{

        public function __construct(){}

        // GETTING THE PATH THAT WAS SENT AS A REQUEST
        /**
         * @param: 
         * @return: String : Request method without parameters. If paramaeters exist, they are not read because the code only reads up to the ? value
         */
        public function getPath(){
            $path = $_SERVER['REQUEST_URI'] ?? '/';
            $position = strpos($path, '?');

            if($position === false){
                return $path;
            }
            return substr( $path, 0, $position);
        }



        // GETTING THE REQUEST METHOD
        /**
         * @param: 
         * @return: String (either get or post request method)
         */
        public function getMethod(){
            return strtolower($_SERVER['REQUEST_METHOD']);
        }
    }



?>