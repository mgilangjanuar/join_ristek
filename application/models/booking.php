<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Booking extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getBooking($sig) {
		$this->db->where('sig', $sig);
		$result = $this->db->get('booking')->row();

		return $result;
	}
}