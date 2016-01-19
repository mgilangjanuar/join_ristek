<?php
	// Require the required files.
	require '/vendor/SSO/SSO/SSO.php';

	// Path to CAS.php, make sure to change this to the suitable location.
	$cas_path = '/vendor/CAS/CAS.php';

	use SSO\SSO;

	// Set the CAS path.
	SSO::setCASPath($cas_path);

	if (!(SSO::check())) {
		$auth_result = SSO::authenticate();
	} else $auth_result = true;

	if($auth_result) {
		# set session;
		$sso_data = SSO::getUser();
		$user_data = array(
				'username' 				=> $sso_data->username,
				'name' 					=> $sso_data->name,
				'npm' 					=> $sso_data->npm,
				'role' 					=> $sso_data->role,
				'org_code' 				=> $sso_data->org_code,
				'faculty' 				=> $sso_data->faculty,
				'study_program' 		=> $sso_data->study_program,
				'educational_program' 	=> $sso_data->educational_program,
			);

		// $this->load->library('session');
		// $this->session->set_userdata('user_data', $user_data);		
		
		// if($controller->biodata->isUserExist(SSO::getUser()->username)) {
		// 	# user exist
		// 	# redirect to dashboard		
		// 	$data['title'] = 'Dashboard';			
		// 	$controller->render('dashboard', $data);
		// } else {
		// 	# new user
		// 	# redirect to form
		// 	$data['title'] = 'Registration Form';
		// 	$controller->render('form', $data);
		// }

		// $controller->auth_success(SSO::getUser());
	}	
?>