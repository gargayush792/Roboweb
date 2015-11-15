<?php
class Siteuser extends CI_Controller{
function __construct(){
parent :: __construct();
$output['events'] = $this->events_m->getallevents() ;
			$output['categories'] = $this->tutorials_m->getallcats() ;
			$output['resources'] = $this->home_m->getallpages() ;
//if($this->phpbb_library->isLoggedIn())
//$output['user'] =  $this->phpbb_library->getUserInfo('username');
	      $this->template->set_template('tutorial'); 
	    $this->template->parse_view('header' , 'template/header', $output);
            $this->template->add_js('js/jquery-latest.js');

            $this->template->add_css('css/events/eventpage.less','link','screen','text/less');
$this->session->set_userdata('refered_from', uri_string()); 

}
	function index(){
             

		//use sql for getting every information. dont use facebook default functions
		//$data = $this->fb_connect->runquery('SELECT uid, name, pic_square FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me()) AND is_app_user=1');
		//$data = $data['data'];
		//print_r($data);
		//$data = $this->fb_connect->runquery('SELECT uid, name, pic_square FROM user WHERE uid = me()');
		//$data = $data['data'];
		//print_r($data);	
		//$this->load->view('user/profile');
		//$this->load->library('fb_connect');
		//$this->fb_connect->fb_connect();
		
		//print_r($this->fb_connect->getfbid());
        //         echo $this->fb_connect->getfbid();
	//	if($this->fb_connect->getfbid()){
	//		echo 'hello';
	//	}
	}
	function _construct(){
		parent :: _construct();
		$this->load->model('user_m');
	}
	
	function login(){
		$username = $this->input->post('username');
                $password = $this->input->post('pass');
		$message = $this->phpbb_library->LoginUser($username,$password);
               echo $message['error_msg'];
                //CI_redirect(site_url());
		
	}
function fblogin(){
		
$user = $this->user_m->getuser('facebook',$_GET['uid']);
//print_r($user);
                $username = $user[0]->username;
                $password = $user[0]->password;
		$message = $this->phpbb_library->LoginUser($username,$password, "true");
              //  echo $message['error_msg'];
		
	}
	function submit(){
		//print_r($this->fb_connect->request());
		
		$data1 = $this->fb_connect->request();
		$message = array();
		if(isset($data1['registration'])){
		$data = $data1['registration'];
		if(isset($data1['user_id'])){
			$data['facebook'] = $data1['user_id'];
			$data['status'] = 'facebook';
		}
			
		$data['ip'] = $_SERVER['REMOTE_ADDR'];
		//echo $this->fb_connect->runquery("SELECT latitude FROM place WHERE page_id=".$data['location']['id']);
		$data['location'] =serialize( $data['location']);
		$data['password'] = md5($data['password']);
		//echo "Information entered:<pre>";
		//print_r($data);
		//echo "</pre>";
		
		if(($this->user_m->validate('username',$data['username']))){
			$user = $this->user_m->getuser('username' , $data['username']);
			//echo "Information found from username:<pre>";
			//print_r($user);
			//echo "</pre>";
			
			if($user[0]->email == $data['email']){
				array_push($message, 'Email verified with the same Usrname');
 //$this->phpbb_library->addUser($data); //Testing phpbb addition
				if(isset($data['facebook'])){
					//Registering through facebook
						if(($this->user_m->validate('facebook',$data['facebook']))) //Same id exists somewhere
							{
								
							if(($user[0]->facebook != $data['facebook'])){
								//Is the id with same email
							array_push($message, 'Facebook id exists with different username and email');
							}
							else {
								//TESTED
								array_push($message, 'Facebook id exists with same username and email. Nothing changed');
							}
						}
						else	 {
							if($user[0]->facebook != $data['facebook']){
								//check if he has already registered through facebook
								$data['status'] = 'facebook';	
								$this->user_m->updateuser('email',$data['email'],$data);
								array_push($message,'Thankyou for registering through facebook');
							}
						}
				}
				
					
				else{ //False registration. Give password forgotten thing or somebody trying to change password
						array_push($message,'You have already registered by fb and site');
				}
			}
			else {
					array_push($message,'Username taken');
			}
				
		}
		else if($this->user_m->validate('email',$data['email'])){
			$user = $this->user_m->getuser('email' , $data['email']);
			//echo "Information found from email:<pre>";
			//print_r($user);
			//echo "</pre>";
		
			array_push($message,'Account with same email found');
			if($user[0]->username == $data['username']){
				array_push($message,'Username verified');
				if(isset($data['facebook'])){
						if(!empty($user[0]->facebook))//Might be registering through facebook again
							{
							//check if he has already registered through facebook
							array_push($message, 'Facebook id exists with the same email');
						
						}
						else	 {
							$data['status'] = 'facebook' ;
							$this->user_m->updateuser('email',$data['email'],$data);
							array_push($message,'Thankyou for registering through facebook');
							
						}
				}
				else{
				     array_push($message,'Nothing to change');
				}
			}
			else{
				//Same email different username
				if(isset($data['facebook'])){
				
						if($data['facebook']==($user[0]->facebook))//Might be registering through facebook again
							{
							//check if he has already registered through facebook    //TESTED
							array_push($message, 'Facebook id exists with same email');
							array_push($message, 'Username different and not changed');
						}
						else	 {
							$this->user_m->updateuser('email',$data['email'],$data);
							array_push($message,'Username changed'); //Username and password changed only when trying throught facebook
							$data['status'] = 'facebook';
							array_push($message,'Thankyou for registering through facebook');

							
						}
				}
				else{
					array_push($message, 'Nothing changed');
				}
			}
		}
		else{ 
			if(($this->user_m->validate('email',$data['email']))){ //Double registration
				
					array_push($message,'Email address exists') ;
				}
			else{
				
				if(!empty($data['facebook'])&&($this->user_m->validate('facebook',$data['facebook']))){
					array_push($message,'Facebook id exists') ;
					
				}
				else{
					//Totally new account added only when no facebook id email or username already exists
					array_push($message,'New account added') ;
					$this->user_m->insertuser($data);
                                        $this->phpbb_library->addUser($data);
				}
			}
		}
		}//For the if that checks if form data is set
		else{
			array_push($message,'Please fill the form first');
		}
		 $this->template->set_template('tutorial'); 
		 $this->template->write_view('header' , 'template/header');
		 $this->template->write('title' , $this->uri->segment('2'));
          
		 $this->template->add_js('js/jquery-latest.js');

		 

           

		 $this->template->add_css('css/grid/grid.less','link','screen','text/less');

            

	    
		foreach($message as $value)
			$this->template->write('content',$value.'<br/>');

		$this->template->render();
		
	}
	function register(){
		

           
$this->template->write('title' , 'Register');
		

	    
	  
		$this->template->write_view('content', 'user/register');

		$this->template->render();
		
		//print_r($this->college_m->getcolleges());
		
		
	}
function profile(){
		$this->load->view('user/profile');
		// if ($this->phpbb_library->isLoggedIn() === TRUE)
       // {
        //   echo "Welcome";

            
        //}
        //else
        //{
         //   echo "You are not logged-in.";
        //}
	
		if($this->fb_connect->fb->getUser()){
			//echo 'Loggged in with facebook<br/>';
			//echo $this->fb_connect->fb->getUser();
			//Fetch user from site database
			$siteuser = $this->user_m->getuser('facebook',$this->fb_connect->fb->getUser());
			print_r($siteuser);
			//Log in to phpbb
			
			print_r($this->phpbb_library->LoginUser($siteuser[0]->username,$siteuser[0]->password));
			
		}
		else{
			echo 'Not logged in with facebook<br/>';
			echo 'Register with facebook<br/>';
			echo 'Login at Forum';
		}
		
		
		
	}
}