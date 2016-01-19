<?php 

// SSO library
require_once '/vendor/SSO/SSO/SSO.php';
use SSO\SSO;
SSO::setCASPath('/vendor/CAS/CAS.php');

class Logout extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		# unset session data
		$this->session->unset_userdata('user_data');

		# logout SSO
		SSO::logout();
	}
}