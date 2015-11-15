<?php

//fb_connect.php
//Author: Graham McCarthy,  HitSend Inc., September 29th, 2010
//Email: graham@hitsend.ca
//Description: facebook connect library, connects to facebook and
//    stores all the required information in return variables
//grab the facebook api php file
include(APPPATH.'libraries/facebook.php');

class Fb_connect {
	//declare variables
	private $_obj;
	private $_api_key        = NULL;
	private $_secret_key    = NULL;

	public     $user             = NULL;
	public     $user_id         = FALSE;

	public $fbLoginURL     = "";
	public $fbLogoutURL = "";

	public $fb             = FALSE;
	public $fbSession    = FALSE;
	public $appkey        = 0;
	public $user_profile  ;
	public $request;
	public  $redirect_uri;
	//constructor method.
	function Fb_connect()
	{
		
		$this->_obj =& get_instance();

		

		
	 $this->_api_key        = $this->_obj->config->item('facebook_api_key');
	 $this->_secret_key    = $this->_obj->config->item('facebook_secret_key');

		$this->appkey = $this->_api_key;

		
	$this->fb = new Facebook(array(
				'appId'  => $this->_api_key,
				'secret' => $this->_secret_key,
				'cookie' => true,
		));
		$this->user_id = $this->fb->getUser();

		if (($this->user_id)) {
			try {
				
				$this->user_profile = $this->fb->api('/me');


			}  catch (FacebookApiException $e) {
  					  error_log($e);
   						$this->user_id = null;
  		        }
		}
		
		
		if (($this->user_profile)) {
			$this->fbLogoutURL = $this->fb->getLogoutUrl();
		} else {
			$this->fbLoginURL = $this->fb->getLoginUrl();
		}
		
		
	} 
	public function request(){
		
			return $this->request = $this->fb->getSignedRequest() ;
	}
	public function runquery($query){
		
		$app_id = $this->_api_key;
		 $app_secret = $this->_secret_key;
		 $my_url = $this->_obj->config->item('site_uri') . 'user';
		if(isset($_REQUEST["code"]))
		 $code = $_REQUEST["code"];
 
		 //auth user
		if(empty($code)) {
				
		  $dialog_url = 'https://www.facebook.com/dialog/oauth?client_id=' 
		  . $app_id . '&redirect_uri=' . urlencode($my_url) ;
		  echo("<script>top.location.href='" . $dialog_url . "'</script>");
		 }

		//get user access_token
		$token_url = 'https://graph.facebook.com/oauth/access_token?client_id='
		  . $app_id . '&redirect_uri=' . urlencode($my_url) 
		 . '&client_secret=' . $app_secret 
		 . '&code=' . $code;
		$access_token = file_get_contents($token_url);
		/*$params = array (  //Another method of running fql
				'method' => 'fql.query' ,
				'query' => $query
		);
		$result = $this->fb->api($params);
		print_r($result);*/
		 // Run fql query
		$fql_query_url = 'https://graph.facebook.com/'
		  . '/fql?q='.urlencode(($query))
		  . '&' . $access_token;
		 $fql_query_result = file_get_contents($fql_query_url);
		 $fql_query_obj = json_decode($fql_query_result, true);

		//display results of fql query
		
		 return $fql_query_obj;
		}
	public function getfbid(){
		return $this->fb->getUser();
	}
	
} // end class
?>