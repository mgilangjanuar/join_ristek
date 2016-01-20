<?php

// SSO library
require_once '/vendor/SSO/SSO/SSO.php';
use SSO\SSO;
SSO::setCASPath('/vendor/CAS/CAS.php');

class Ssologin extends MY_controller {
	
	public function __construct() {
		parent::__construct();		
	}

	public function index() {
		if(!SSO::check()) SSO::authenticate();

		$user = SSO::getUser();
		$user_data = array(
				'username' 				=> $user->username,
				'name' 					=> $user->name,
				'npm' 					=> $user->npm,
				'angkatan'				=> $this->parseTahunAngkatan($user->npm),							
				'jurusan' 				=> $user->study_program				
			);

		// re-set session
		$this->session->unset_userdata('user_data');
		$this->session->set_userdata('user_data', $user_data);

		// check if user is admin
		if ($this->useradmin->isAdmin($user->username)) {
			// redirect to admin747835
			redirect(site_url('admin747835'));
		} else {
			// check if user exist or not
			if ($this->biodata->isUserRegistered($user->username)) {
				// user exist
				// redirect to dashboard
				redirect(site_url('dashboard'));
			} else {
				// user not exist
				// create initial data in database
				if(!($this->biodata->get($user->username))) $this->saveUserDataToDatabase($user_data);
				// redirect to form
				redirect(site_url('register'));
			}	
		}

		
	}

	private function parseTahunAngkatan($npm) {
		// load helper
		$this->load->helper('text');

		// parsing char
		$parsed = substr($npm, 0, 2);
		$tahun = '20'.$parsed;
		return $tahun;
	}

	private function saveUserDataToDatabase($user_data) {
		$user_arr = array(
				'username' 				=> $user_data['username'],
				'name' 					=> $user_data['name'],
				'npm' 					=> $user_data['npm'],
				'angkatan'				=> $user_data['angkatan'],
				'jurusan' 				=> $user_data['jurusan'],
			);

		# create initial biodata record
		$this->biodata->create($user_arr);

		# create initial tugas record
		$this->tugas->create(array('username' => $user_data['username']));

		# create initial pilihan record
		$this->pilihan->create(array('username' => $user_data['username']));
	}

}