<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Research1 extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');
		$this->load->view('backend/research1');
		$this->load->view('backend/script');
		
		
	}

	
}