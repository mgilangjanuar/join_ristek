<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
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

	private function isAdmin($username) {
		$admin_arr = array(
			'jundi.ahmad', 
			'muhammad.firza', 
			'siti.fatimah34',
			'made.nindyatama',
			'ammar.fathin',
			'mohammad.awwaab',
			'anthony31'
			);

		if (in_array($username, $admin_arr)) return true;
		else return false;
	}

	private function refresh_userdata() {		
		$user = $this->session->userdata('user_data');			
		$this->session->set_userdata('user_data', $user);
	}
}