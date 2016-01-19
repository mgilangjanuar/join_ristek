<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin747835 extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//check if user is admin
		if (!$isAdmin) {
			// if it's not
			// redirect to index
			redirect(site_url());
		}

		$admin = ($this->session->userdata('user_data'))['username'];

		// Username SIAK:
		// muhammad.firza
		// siti.fatimah34
		// made.nindyatama
		// ammar.fathin
		// mohammad.awwaab
		// anthony31
		// jatmiko.budi

		$sig = NULL;

		if ($admin == 'ammar.fathin') $sig = 'csci';
		else if ($admin == '') $sig = 'dev';
		else if ($admin == 'anthony31') $sig = 'cp';
		else if ($admin == 'jatmiko.budi') $sig = 'ds';
		else if ($admin == '') $sig = 'es';
		else if ($admin == '') $sig = 'ns';
		else if ($admin == '') $sig = 'gd';
		else if ($admin == '') $sig = 'md';
		else if ($admin == '') $sig = 'ux';
		else if ($admin == '') $sig = 'wb';
		else if ($admin == 'made.nindyatama') $sig = 'pr';

		$data['title'] = 'Admin Dashboard';
		$data['result']	= $this->admin->getAll($sig);
		$this->render('admin', $data);
	}
}