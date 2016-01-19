<?php 
	// Require the required files.
	if (!(defined('CAS_SERVER_HOST'))) require '/vendor/SSO/SSO/SSO.php';	
	
	use SSO\SSO;

	// Set the CAS path.
	SSO::setCASPath('/vendor/CAS/CAS.php');

	SSO::logout();

	$controller->load->view('home');
?>