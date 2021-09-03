<?php


namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller{

    /**
     * 
     */
    public function login(Request $request){

        if($request->getMethod() === 'get'){

        }else if($request->getMethod() === 'post'){
            
        }

        return $this->render('login');
    }



    /**
     * 
     */
    public function signup(Request $request){

        if($request->getMethod() === 'get'){

        }else if($request->getMethod() === 'post'){

        }

        return $this->render('signup');
    }

}


?>