<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Info extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Open Recruitment Info';
		$this->load->view('info', $data);
	}
}