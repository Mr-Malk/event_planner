<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		session_start();
		
        $this->load->view('header');

		$this->load->view('login');
		$this->load->view('footer');
	}
    public function sign_up()
	{
        $this->load->view('header');

		$this->load->view('signup_view');
		$this->load->view('footer');
	}
}