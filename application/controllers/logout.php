<?php 

// SSO library
require_once 'http://ristek.cs.ui.ac.id/vendor/SSO/SSO/SSO.php';
use SSO\SSO;
SSO::setCASPath('http://ristek.cs.ui.ac.id/vendor/CAS/CAS.php');

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