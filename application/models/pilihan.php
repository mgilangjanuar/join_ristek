<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pilihan extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get($username = NULL) {
		if($username != NULL) {
			$this->db->where('username', $username);
			return $this->db->get('pilihan')->row();
		} else {
			return $this->db->get('pilihan')->result();	
		}		
	}

	public function create($user_pilihan) {
		return $this->db->insert('pilihan', $user_pilihan);
	}

	public function update($username, $pilihan_arr) {
		$this->db->where('username', $username);
		return $this->db->update('pilihan', $pilihan_arr);
	}
}