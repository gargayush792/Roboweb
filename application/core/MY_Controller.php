<?php
class Public_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

		// LOADS THE FACEBOOK LIBRARY FROM THE LIBRARIES FOLDER
		// TO AVOID ANY NOTICES OR WARNINGS, PASS THE REQ'D
		// FACEBOOK INFO - APPID, SECRET, COOKIE - WHILE LOADING
		$this->load->library('facebook',array(
				'appID' => $this->config->item('fb_app_id'),
				'secret'=> $this->config->item('fb_secret_key'),
				'cookie'=> TRUE
		));

		// GET THE FACEBOOK SESSION DATA AND STORE IT
		$this->data->session = $this->facebook->getSession();
	}
}
?>