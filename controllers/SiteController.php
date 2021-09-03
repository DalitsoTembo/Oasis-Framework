<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{

    public function showHome(){

        $params = [
            'firstname' => "Dalitso",
            'lastname' => "Tembo"
        ];

        return $this->render('home', $params);

    }
    
    
    
    
    public function handleContact(Request $request){
        
        $body = $request->getBody();

        echo '<prev>';
        var_dump($body);
        echo '</prev>';
        exit;
        
        return 'Handling contact';

    }

    
    public function showContact(){

        return $this->render('contact');

    }

}

?>