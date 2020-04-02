<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
		
	}

	public function index()
	{
		$this->load->view('login');
		
	}

	public function table()
	{
		$x['data']=$this->m_pegawai->show_pegawai();

		$this->load->view('table',$x);
	}	
	public function form(){
		// $insert = $this->m_input->input_data('dpegawai');
		$this->load->view('v_form');
	}


	// function form_aksi(){
	// 	$nip = $this->input->post('nip');
	// 	$password = $this->input->post('password');
	// 	$nama = $this->input->post('nama');
	// 	$tmp_lahir = $this->input->post('tmp_lahir');
	// 	$tgl_lahir = $this->input->post('tgl_lahir');
	// 	$jekel = $this->input->post('jekel');
	// 	$alamat = $this->input->post('alamat');
	// 	$tgl_masuk = $this->input->post('tgl_masuk');
	// 	$norek = $this->input->post('norek');
	// 	$g_pokok = $this->input->post('g_pokok');
	// 	$jabatan = $this->input->post('jabatan');
	// 	$pendidikan = $this->input->post('pendidikan');
	// 	$stat_pegawai = $this->input->post('stat_pegawai');

	// 	$data = array(
	// 		'nip' => $nip,
	// 		'password' => $password,
	// 		'nama' => $nama,
	// 		'tmp_lahir' => $tmp_lahir,
	// 		'tgl_lahir' => $tgl_lahir,
	// 		'jekel' => $jenis_kelamin,
	// 		'alamat' => $alamat,
	// 		'tgl_masuk' => $tgl_masuk,
	// 		'norek' => $no_rek,
	// 		'g_pokok' => $gaji_pokok,
	// 		'jabatan' => $jabatan,
	// 		'pendidikan' => $pendidikan,
	// 		'stat_pegawai' => $status_pegawai
	// 	);
	// 	$this->m_input->input_data($data,'user');
	// 	redirect('c_gaji/v_form');
	// }

	

}
