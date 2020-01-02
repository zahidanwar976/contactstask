<?php

class Login extends Base_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Mdl_login');
	}
	private $folder = "Login";

	public function dashboard(){
		$this->template_backend('/index');
	}

	public function index(){
		$this->load->view($this->folder.'/signin');
	}
	public function signup(){
		$this->load->view($this->folder.'/signup');
	}
	public function add(){
		$data = $this->input->post();
		$this->db->insert('signup',$data);
		return redirect($this->uri->segment(1),'refrsh');
	}
	public function signin(){
		$post = $this->input->post();
		$username = $post['username'];
		$password = $post['pass'];

		$var = $this->Mdl_login->getdetail($username,$password);

		if(empty($var)){
			$this->session->set_flashdata('error','<div class="alert alert-danger" role="alert">
  Invalid Username & Password
</div>');
			return redirect($this->uri->segment(1),'refresh');
		}
		else{
			$data = array(

				'id' => $var[0]->id,
				'username' => $var[0]->username
			);
			$this->session->set_userdata($data);
			redirect(base_url('Login/dashboard'),'refresh');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		return redirect($this->uri->segment(1),'refresh');
	}
		public function delete($id){
	 $this->Mdl_login->remove($id);
	 return redirect(base_url($this->uri->segment(1),'refresh'));
	}
	


}

?>