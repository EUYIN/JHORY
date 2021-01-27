<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCategoria extends CI_Controller {

	public function index()
	{
		$this->load->view('cabecera');
		$this->load->view('viecategoria');
	}
	
}
