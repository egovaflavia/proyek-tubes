<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('id_user');
    }

    public function register($enc_password){
   // User data array
     $data = array(
        'nama' => $this->input->post('nama_user'),
        'username' => $this->input->post('username'),
        'password' => $enc_password,
    );

   // Insert user
     return $this->db->insert('tbl_users', $data);
 }

	//fungsi check login
 function check_login($table, $field1, $field2)
 {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($field1);
    $this->db->where($field2);
    // $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
        return FALSE;
    } else {
        return $query->result();
    }
}
}