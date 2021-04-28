<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$data = array(
			'isi' => 'page');
		$this->load->view('base', $data);
	}

	public function login($value='')
	{
		$this->load->view('login');
	}
}
