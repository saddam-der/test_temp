<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_regis');
		// $this->load->model('m_admin_petugas');
		$this->load->model('M_login');
		$this->load->model('M_logout');
    }
    
    public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('test');
		} else {
			$this->_aksi_login();
		}
    }
    
    private function _aksi_login()
	{
		$this->M_login->aksi_login();
	}

	public function rakyat_regis()
	{
		$this->M_regis->rakyat_regis();
	}

	// public function register()
	// {
	// 	$this->m_admin_petugas->register_ap();
	// }

	public function logout()
	{
		$this->M_logout->aksi_logout();
	}
}