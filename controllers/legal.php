<?php
 

class Legal extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {     
		  $this->view->title =  'Legal';
		  $this->view->render('legal/index');
    }
     
      
    















    //////////////////////////////////////////////////

}
