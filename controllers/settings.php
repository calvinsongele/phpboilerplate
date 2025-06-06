<?php
 

class Settings extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {    
		  $this->view->title =  'Edit pages | '. $this->_company()['c_name'];
		  $this->view->render('index/settings');
    }
     
       
        
        
        
        
        
        
        
        
        
        
        
    }