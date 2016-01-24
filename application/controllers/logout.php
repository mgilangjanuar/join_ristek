<?php 

// SSO library
require_once(__DIR__.'/../../vendor/SSO/SSO/SSO.php');
SSO\SSO::setCASPath(__DIR__.'/../../vendor/CAS/CAS.php');

class Logout extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		# unset session data
		$this->session->unset_userdata('user_data');

		# logout SSO
		SSO\SSO::logout();
	}
}