<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();

        // Initialization tasks go here
        $this->load->model('Login_model');
    }
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
	public function register_user(){
		if($this->input->post()){
			$inputs=$this->input->post();
			$row=$this->Login_model->save_user($inputs);
			if($row){
				echo json_encode(['msg'=>'success']);
			}
			else {
				echo json_encode(['msg'=>'error']);

			}
		}
	}
}