<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Errors extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function error_404() {
		$data['title'] = 'Are you lost?';
		$this->load->view('404', $data);
	}
}