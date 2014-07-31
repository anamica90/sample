<?php

namespace Multiple\Frontend\Controllers;

class IndexController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		$response = new \Phalcon\Http\Response();
         
            return $response->redirect(array(
                    
                    "for"=>"login"
                    
                    ));
	}

}