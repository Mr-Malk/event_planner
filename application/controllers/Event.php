<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	
	public function index()
	{

        
        $this->load->view('header');

		$this->load->view('event_view');
		$this->load->view('footer');
	}
    public function edit_event()
	{
        $this->load->view('header');

		$this->load->view('edit_event_view');
		$this->load->view('footer');
	}
    public function view_event()
	{
        $this->load->view('header');

		$this->load->view('view_event_view');
		$this->load->view('footer');
	}
}