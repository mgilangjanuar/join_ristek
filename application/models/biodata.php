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

	public function qualify($biohash, $isQualify) {
		$this->db->where('biohash', $biohash);		
		if ($isQualify == 0) {
			// qualify
			return $this->db->update('biodata', array('isQualified' => 1));
		} else {
			// undo qualify
			return $this->db->update('biodata', array('isQualified' => 0));
		}
	}

	public function isUserQualified($username) {
		$this->db->select('isqualified');
		$this->db->where('username', $username);
		$result = $this->db->get('biodata')->row();

		return $result->isqualified;
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