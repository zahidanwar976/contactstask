<?php

class Base_Controller extends CI_Controller{

	public function __construct(){
		parent:: __construct();
	}

	public function template_backend($page,$data = array()){

		$this->load->view('layout/header');
		// $this->load->view('layout/sidebar');
		$this->load->view('theme/'.$page, $data);
		$this->load->view('layout/footer');


	}

}

?>