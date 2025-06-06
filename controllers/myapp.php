<?php

class MyApp extends Controller {

	public function __construct() {
		parent::__construct();
		Session::initialize();
		if (!isset($_POST))	return;
	}
	
	public function index() {	
		$this->view->title = "404 Error";
        $this->view->render('err/index');
	}
	// Default
    public function session_last_longer() {   }  
    public function login() { $this->model->login(); }  
    public function register() { $this->model->register(); }  
    public function subscribe() { $this->model->subscribe(); 	}
	public function contactform() { 	$this->model->contactform(); 	}   
    public function forgotpassword() {$this->model->forgotpassword(); 	}
    public function resetpass() {$this->model->resetpass(); 	}  
    public function update_analytics() {$this->model->update_analytics(); 	}  
    public function dd() {$this->model->dd(); 	}     
    public function new_email_send() {$this->model->new_email_send(); 	} 
    public function new_sms_send() {$this->model->new_sms_send(); 	}  
    public function edituser() {$this->model->edituser(); 	} 
    public function update_company() {$this->model->update_company(); 	}   
    public function changepass() {$this->model->changepass(); 	}  
    public function deleteticket() {$this->model->deleteticket(); 	} 
    public function closeticket() {$this->model->closeticket(); 	} 
    public function del_blog() {$this->model->del_blog(); 	}   
    public function manage_blog() {$this->model->manage_blog(); 	} 
    public function manage_categories() {$this->model->manage_categories(); 	}  
    public function content_update() {$this->model->content_update(); 	} 
    public function delete_users() {$this->model->delete_users(); 	}  
    public function add_users() {$this->model->add_users(); 	} 
    public function update_users() {$this->model->update_users(); 	} 
    public function dropsubscriber() {$this->model->dropsubscriber(); 	}   
    public function update_company_images() {$this->model->update_company_images(); 	}   
         
    
    
    //specific















}