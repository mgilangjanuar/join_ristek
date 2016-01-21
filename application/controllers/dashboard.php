<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Dashboard extends MY_Controller {
	public function __construct() {
		parent::__construct();

		# load helper and library
		$this->load->helper('form');
		$this->load->model('sigproperty');
		$this->load->library('form_validation');
	}

	public function index() {		
		// check if user logged in or not
		if (!($this->is_logged_in())) {
			// user not logged in
			redirect(site_url('ssologin'));
		} else {			
			// user logged in			
			$user = $this->session->userdata('user_data');

			// check if user registered or not
			if ($this->isRegistered($user['username'])) {
				// user registered

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// check if user logged in or not
					if (!$this->is_logged_in()) {
						// user not logged in
						// redirect to sso login
						redirect(site_url('ssologin'));
					} else if ($isAdmin) {
						rediretc(site_url('admin747835'));					
					} else {
						// user logged in

						// set error custom message
						$this->form_validation->set_message('required', '%s is empty, not a valid URL, or it is not accessible/exists');

						// check which form submitted
						if ($this->input->post('which_form') == 'resume') {
							// form resume submitted
							$this->form_validation->set_rules('resume_link_input', 'Resume', 'trim|required|xss_clean');														
							$link = prep_url($this->input->post('resume_link_input'));

							// run form validation
							if ($this->form_validation->run()) $result = $this->tugas->submitResume($user['username'], $link);
						} else if ($this->input->post('which_form') == 'essay') {
							// form resume submitted
							$this->form_validation->set_rules('essay_link_input', 'Resume', 'trim|required|xss_clean');														
							$link = prep_url($this->input->post('essay_link_input'));

							// run form validation
							if ($this->form_validation->run()) $result = $this->tugas->submitEssay($user['username'], $link);
						} else if ($this->input->post('which_form') == 'tugas1') {
							// form tugas1 submitted
							$this->form_validation->set_rules('tugas1_link_input', 'Tugas SIG Pilihan 1', 'trim|required|xss_clean');						
							$link = $this->input->post('tugas1_link_input');
							$link = prep_url($link);

							// run form validation
							if ($this->form_validation->run()) $result = $this->tugas->submitTugas1($user['username'], $link);							
						} else if ($this->input->post('which_form') == 'tugas2') {
							// form tugas2 submitted
							$this->form_validation->set_rules('tugas2_link_input', 'Tugas SIG Pilihan 2', 'trim|required|xss_clean');							
							$link = $this->input->post('tugas2_link_input');
							$link = prep_url($link);

							// run form validation
							if ($this->form_validation->run()) $result = $this->tugas->submitTugas2($user['username'], $link);															
						}
					}

					redirect(site_url('dashboard'));
				}				

				// get tugas data
				$r_tugas = $this->tugas->get($user['username']);
				$data['tugas'] = $r_tugas;

				// get pilihan data
				$r_pilihan = $this->pilihan->get($user['username']);
				$data['pilihan'] = $r_pilihan;

				// get booking object
				$sigprop1 = $this->sigproperty->getSIGProperty($r_pilihan->sig1);
				$sigprop2 = $this->sigproperty->getSIGProperty($r_pilihan->sig2);

				$data['sigprop1'] = $sigprop1;
				$data['sigprop2'] = $sigprop2;

				// render dashboard
				$data['title'] = 'Dashboard';
				$this->render('dashboard', $data);									
			} else {
				// user not registered
				// redirect to form
				redirect(site_url('register'));
			}		
		}	
	}	

	public function valid_url_format($str) {
    	$pattern = "|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i";
        if (!preg_match($pattern, $str)) return false;
        else return true;
    }

    public function url_exists($url) {                                   
        // $url_data = parse_url($url); // scheme, host, port, path, query
        // if(!fsockopen($url_data['host'], isset($url_data['port']) ? $url_data['port'] : 80)) return false;
        // else return true;

        $file_headers = @get_headers($file);
		if(strpos($file_headers[0],'404') === false) return false;
		else return true;
    } 
}