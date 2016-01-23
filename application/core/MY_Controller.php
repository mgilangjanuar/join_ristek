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
		
		$user_data = $this->session->userdata('user_data');
		$date = new DateTime();
		$data['date'] = $date->getTimestamp();
		$data['user'] = $user_data;
		$data['content'] = $this->load->view($view, $data, TRUE);		
		$data['isLogin'] = $this->is_logged_in();	
		$data['isAdmin'] = $this->isAdmin($user_data['username']);
		$data['isRegistered'] = $this->isRegistered($user_data['username']);
		if ($this->is_logged_in()) $this->refresh_userdata();
		$this->load->view('template', $data);
	}

	public function error_404() {
		$data['title'] = 'Nothing Interesting Here - Ristek Fasilkom UI';
		$this->render('404', $data);
	}

	public function forbidden() {
		$data['title'] = 'Forbidden Page - Ristek Fasilkom UI';
		$this->render('forbidden', $data);
	}

	public function is_logged_in() {
		return $this->session->userdata('user_data');
	}

	public function isAdmin($username) {
		return $this->useradmin->isAdmin($username);
	}

	public function isRegistered($username) {
		return $this->biodata->isUserRegistered($username);
	}

	private function refresh_userdata() {		
		$user = $this->session->userdata('user_data');			
		$this->session->set_userdata('user_data', $user);
	}
}