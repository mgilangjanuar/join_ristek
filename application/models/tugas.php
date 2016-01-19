<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Tugas extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function get($username = NULL) {
		if($username != NULL) {
			$this->db->where('username', $username);
			return $this->db->get('tugas')->row();	
		} else {
			return $this->db->get('tugas')->result();	
		}
		
	}

	public function create($user_tugas) {
		# user_tugas is array
		return $this->db->insert('tugas', $user_tugas);
	}

	public function update($username, $tugas_arr) {
		$this->db->where('username', $username);
		return $this->db->update('tugas', $tugas_arr);
	}

	public function getResumeLink($username) {
		$this->db->select('resume');
		$this->db->where('username', $username);
		return $this->db->get('tugas')->row();
	}

	public function getTugas1Link($username) {
		$this->db->select('tugas1');
		$this->db->where('username', $username);
		return $this->db->get('tugas')->row();
	}

	public function getTugas2Link($username) {
		$this->db->select('tugas2');
		$this->db->where('username', $username);
		return $this->db->get('tugas')->row();
	}

	public function submitResume($username, $link) {		
		# insert link to database
		$this->db->where('username', $username);
		return $this->db->update('tugas', array('resume' => $link));
	}

	public function submitTugas1($username, $link) {		
		# insert link to database
		$this->db->where('username', $username);
		return $this->db->update('tugas', array('tugas1' => $link));
	}

	public function submitTugas2($username, $link) {		
		# insert link to database
		$this->db->where('username', $username);
		return $this->db->update('tugas', array('tugas2' => $link));
	}

	public function isResumeNull($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('tugas')->result_array();
		return $result->resume == NULL;
	}

	public function isTugas1Null($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('tugas')->result_array();
		return $result->tugas1 == NULL;
	}

	public function isTugas2Null($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('tugas')->result_array();
		return $result->tugas2 == NULL;
	}
}