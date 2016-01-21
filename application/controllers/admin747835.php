<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Admin747835 extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('sigproperty');
	}

	public function index() {
		$user = $this->session->userdata('user_data');
		$admin_username = $user['username'];

		//check if user is admin
		if (!$this->isAdmin($user['username']) & !$this->is_logged_in()) {
			// if it's not
			// redirect to index
			redirect(site_url('ssologin'));
		} else {

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				# code...
			} else {

			}
		}

		$admindata = $this->useradmin->getAdmin($user['username']);		

		$data['title'] = 'Admin Dashboard';		

		$data['admindata'] = $admindata;
		$data['pendaftar']	= $this->useradmin->getAllPendaftar($admindata->role);
		$this->render('admin', $data);
	}
}