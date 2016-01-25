<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	// render template.php and the content which user request
	public function render($view, $data = array()) {
		if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
		
		$userdata = $this->session->userdata('userdata');
		$date = new DateTime();
		$data['date'] = $date->getTimestamp();
		$data['user'] = $userdata;
		$data['content'] = $this->load->view($view, $data, TRUE);		
		$data['isLogin'] = $this->is_logged_in();	
		$data['isAdmin'] = $this->isAdmin($userdata['username']);
		$data['isRegistered'] = $this->isRegistered($userdata['username']);
		if ($this->is_logged_in()) $this->refresh_userdata();
		$this->load->view('template', $data);
	}

	public function error_404() {
		$data['title'] = 'Nothing Interesting Here - Ristek Fasilkom UI';
		$this->render('404', $data);
	}

	public function error_403() {
		$data['title'] = 'Forbidden Page - Ristek Fasilkom UI';
		$this->render('forbidden', $data);
	}

	public function is_logged_in() {
		return $this->session->userdata('userdata');
	}

	public function isAdmin($username) {
		return $this->useradmin->isAdmin($username);
	}

	public function isRegistered($username) {
		return $this->biodata->isUserRegistered($username);
	}

	private function refresh_userdata() {		
		$user = $this->session->userdata('userdata');			
		$this->session->set_userdata('userdata', $user);
	}
}