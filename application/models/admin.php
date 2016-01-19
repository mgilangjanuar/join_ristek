<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getAll($sig = NULL) {
		$this->db->from('biodata b');
		$this->db->join('tugas t', 't.username=b.username');
		$this->db->join('pilihan p', 'p.username=b.username');
		if ($sig != NULL) $this->db->where('sig1='.$sig.' or sig2='.$sig);
		$this->db->order_by('b.timestamp', 'asc');

		$result = $this->db->get();

		return $result;
	}

	public function isTaskComplete($username) {		
		$tugas = $this->tugas->get($username);		
		$isResumeComplete = $tugas->resume != NULL;
		$isTugas1Complete = $tugas->tugas1 != NULL;
		$isTugas2Complete = $tugas->tugas2 != NULL;

		if($isResumeComplete & $isTugas1Complete & $isTugas2Complete) return true;
		else return false;
	}	
}
