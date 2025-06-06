<?php 

class Account extends Controller {

    function __construct() {
        parent::__construct();
        
    }

    public function index() {   
          if (Session::get('email') != null) CustomFunctions::relocate('/dashboard'); 
        
		  $this->view->title =   'Login ' ;
		  $this->view->render('account/login');
    }
     
    public function login() {   
        CustomFunctions::relocate('/account'); 
    }
   
    public function verifyemail() {   
        CustomFunctions::relocate('/account/verify-email'); 
    }
    public function verifytel() {   
        CustomFunctions::relocate('/account/verify-tel'); 
    }
    
    public function signup() {   
          if (Session::get('email') != null) CustomFunctions::relocate('/dashboard'); 
            
		  $this->view->title =   'Create a new account ' ;
		  $this->view->render('account/register'); 
    }
   
    public function forgotpassword() {
          if (Session::get('email') != null) CustomFunctions::relocate('/dashboard'); 
          
		  $this->view->title =   'Forgot Password ' ;
		  $this->view->render('account/forgot-password'); 
    }

    public function newpassword() {   
          if (Session::get('email') != null) CustomFunctions::relocate('/dashboard'); 
          
		  $this->view->title =   'Set New Password ' ;
		  $this->view->render('account/new-password'); 
    }










    //////////////////////////////////////////////////

}