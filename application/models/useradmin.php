<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Useradmin extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getAllPendaftar($sig) {
		$this->db->from('biodata b');
		$this->db->join('tugas t', 't.username=b.username');
		$this->db->join('pilihan p', 'p.username=b.username');
		$this->db->join('kualifikasi k', 'k.username=b.username');

		$where = '';
		if ($sig == 'cs') {
			$where = '
				sig1="cp" or sig2="cp" or
				sig1="ds" or sig2="ds" or
				sig1="es" or sig2="es" or
				sig1="ns" or sig2="ns"
			';			
		} else if ($sig == 'dv') {
			$where = '
				sig1="gd" or sig2="gd" or
				sig1="wb" or sig2="wb" or
				sig1="ux" or sig2="ux" or
				sig1="md" or sig2="md"
			';			
		} else $where = 'sig1='.$sig.' or sig2='.$sig;

		if ($sig != 'sp') $this->db->where($where);

		$this->db->order_by('b.timestamp', 'asc');

		$result = $this->db->get()->result();

		return $result;
	}

	public function isAdmin($username) {
		$this->db->select('username');
		$result = $this->db->get('admin')->result_array();
		$admin_arr = array();

		foreach ($result as $r) array_push($admin_arr, $r['username']);
		
		if (in_array($username, $admin_arr)) return true;
		else return false;
	}

	public function getAdmin($username) {
		$this->db->where('username', $username);
		$result = $this->db->get('admin')->row();

		return $result;
	}	
}
