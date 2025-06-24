<?php
 

class ContactUs extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {     
		  $this->view->title =  'Contact Us';
		  $this->view->render('index/contact');
    }
     
      
    















    //////////////////////////////////////////////////

}
