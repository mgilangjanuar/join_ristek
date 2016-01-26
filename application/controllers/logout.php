<?php 

// SSO library
require_once(__DIR__.'/../../vendor/SSO/SSO/SSO.php');
use SSO\SSO;
SSO::setCASPath(__DIR__.'/../../vendor/CAS/CAS.php');

class Logout extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		if (time() < (strtotime('26th January 2016 18:16:00.0')-(21*60+30))) {
			redirect(site_url());
		}
		
		if (!$this->is_logged_in()) {
			redirect(site_url());
		} else {
			# unset session data
			$this->session->unset_userdata('user_data');

			# logout SSO
			SSO::logout();			
		}
	}
}