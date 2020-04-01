<?php 
 
class M_input extends CI_Model{
	// function tampil_data(){
	// 	return $this->db->get('user');
	// }
 
	function input_data($table,$data){
		$input = $this->db->insert($table,$data);
		return $input;
	}
}