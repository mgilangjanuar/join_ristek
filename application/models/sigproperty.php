<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Sigproperty extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getSIGProperty($sig) {
		$this->db->where('sig', $sig);
		$result = $this->db->get('sigproperty')->row();

		return $result;
	}
}