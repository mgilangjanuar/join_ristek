<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getAll($sig = NULL) {
		if ($sig != NULL) {

		} else {

		}
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
