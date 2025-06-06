<?php

//use phpDocumentor\Reflection\Types\Parent_;

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {    
          $this->view->latest = $this->model->getblog();    
		  $this->view->title = $this->_company()['c_name'] .' | '. $this->_company()['c_short_desc'];
		  $this->view->render('index/index' );
    }
    public function search() {
        
           $this->view->search_results = $this->model->search_values(  );
		  $this->view->title = 'Search | '. $this->_company()['c_short_desc'];
		  $this->view->render('index/search');
    }
     
    










    //////////////////////////////////////////////////

}