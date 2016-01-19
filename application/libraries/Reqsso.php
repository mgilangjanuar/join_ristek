<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reqsso {

    public function __construct()
    {
        // Require the required files.
		if (!(defined('DEFAULT_DEBUG_DIR'))) {
			//require_once '/vendor/SSO/SSO/SSO.php';				
			$cas_path = '/vendor/CAS/CAS.php';
			// Set the CAS path.
			SSO\SSO::setCASPath($cas_path);
		}
    }
}

?>