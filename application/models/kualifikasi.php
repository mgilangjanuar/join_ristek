<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Kualifikasi extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function create($user_arr) {
		return $this->db->insert('kualifikasi', $user_arr);
	}

	public function getQualifyData($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('kualifikasi')->row();
		return $result;
	}

	public function qualifyPil1($biohash, $isQualify) {
		$this->db->where('biohash', $biohash);		
		if ($isQualify == 0) {
			// qualify
			return $this->db->update('kualifikasi', array('isPil1Qualified' => 1));
		} else {
			// undo qualify
			return $this->db->update('kualifikasi', array('isPil1Qualified' => 0));
		}
	}

	public function qualifyPil2($biohash, $isQualify) {
		$this->db->where('biohash', $biohash);		
		if ($isQualify == 0) {
			// qualify
			return $this->db->update('kualifikasi', array('isPil2Qualified' => 1));
		} else {
			// undo qualify
			return $this->db->update('kualifikasi', array('isPil2Qualified' => 0));
		}
	}
}