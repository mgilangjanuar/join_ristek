<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin747835 extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Admin Dashboard - RISTEK FASILKOM UI';
		$this->render('admin-oprec', $data);
	}
}