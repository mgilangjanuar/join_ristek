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

	public function submitResume($username, $link) {		
		# insert link to database
		$this->db->where('username', $username);
		return $this->db->update('tugas', array('resume' => $link));
	}

	public function submitEssay($username, $link) {		
		# insert link to database
		$this->db->where('username', $username);
		return $this->db->update('tugas', array('essay' => $link));
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
}