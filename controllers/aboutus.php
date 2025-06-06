<?php
 

class AboutUs extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {   
     
      $this->view->pid = 'about'; 
	  $this->view->title =  'About Us | '. $this->_company()['c_name'];
	  $this->view->render('index/about');
    }
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }