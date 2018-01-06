<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WaitingKP extends CI_Controller {

	public function index()
	{
		$this->load->view('waitingkp/waitingkp');
	}
}