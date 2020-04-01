<?php 
class c_user    extends CI_Controller {
public function index()
	{
		$data['user']=$this->m_user->show_user()->result();
		$this->load->view('form',$data);
	}
}