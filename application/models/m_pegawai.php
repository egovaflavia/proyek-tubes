<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function show_pegawai()
	{
		$this->db->select('*');
		$this->db->from('dpegawai');
		return $this->db->get()->result();
	}

}