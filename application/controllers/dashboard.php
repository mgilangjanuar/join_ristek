<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Dashboard extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Dashboard - RISTEK FASILKOM UI';
		$this->render('dashboard', $data);
	}
}