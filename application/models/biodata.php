<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Biodata extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function get($username = NULL) {
		if($username != NULL) {
			$this->db->where('username', $username);
			return $this->db->get('biodata')->row();
		} else {
			return $this->db->get('biodata')->result();
		}
	}

	public function create($user_arr) {
		return $this->db->insert('biodata', $user_arr);
	}

	public function update($username, $user_arr) {
		$this->db->where('username', $username);
		return $this->db->update('biodata', $user_arr);
	}

	public function isUserRegistered($username) {		
		// check if timestamp available or not
		$this->db->select('timestamp');
		$this->db->where('username', $username);
		$result = $this->db->get('biodata')->row();

		// if timestamp NULL, user not yet registered
		if (count($result) == 0) return false;
		else {
			if ($result->timestamp == NULL) return false;
			else return true;
		}		
	}
}