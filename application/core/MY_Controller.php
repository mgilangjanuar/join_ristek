<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	// render template.php and the content which user request
	public function render($view, $data = array()) {
		if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
		
		$date = new DateTime();
		$data['date'] = $date->getTimestamp();
		$data['user'] = $this->session->userdata('user');
		$data['content'] = $this->load->view($view, $data, TRUE);		
		$data['isLogin'] = $this->is_logged_in();
		$data['isAdmin'] = $this->isAdmin();
		if ($this->is_logged_in()) $this->refresh_userdata();
		$this->load->view('template', $data);
	}

	public function error_404() {
		$data['title'] = 'Nothing Interesting Here - RISTEK FASILKOM UI';
		$this->render('404', $data);
	}

	public function forbidden() {
		$data['title'] = 'Forbidden Page - RISTEK FASILKOM UI';
		$this->render('forbidden', $data);
	}

	public function is_logged_in() {
		// return $this->session->userdata('user');
	}

	public function refresh_userdata() {
		// $user = $this->user->get($this->session->userdata('user')->id)[0];
		// $user = $this->user->get($this->session->userdata('user')->id);
		// $user = $user[0];
		// $this->session->set_userdata('user', $user);
	}

	public function isAdmin() {
		// if($this->is_logged_in()) return $this->session->userdata('user')->role == 0;
		// else return false;
	}

}