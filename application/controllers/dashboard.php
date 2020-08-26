<?php

class dashboard extends CI_Controller {

    public function index()
	{	
		$data['title'] = 'Dashboard';
		$this->load->view('test',$data);
	}
}