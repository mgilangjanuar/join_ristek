<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Register extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Registration Form - RISTEK FASILKOM UI';
		$this->render('form', $data);
	}
}