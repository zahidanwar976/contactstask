<?php

class Table extends Base_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('Mdl_login');
	}
	 // private $folder = "Login";
	public function index(){
		$var['data'] =  $this->Mdl_login->getdata();
		$this->template_backend('/table',$var);

	}
	public function delete($id){
	 $this->Mdl_login->remove($id);
	 return redirect(base_url($this->uri->segment(1),'refresh'));
	}
	public function edit($id){
		$data = $this->db->get_where('signup', array('id' => $id))->row();
		$this->load->view('Login/update_signup',$data);
	}
	public function update(){
		$post = $this->input->post();
		 // print_r($post);exit();
		$this->db->where('id',$post['id']);
		$this->db->update('signup',$post);
		return redirect(base_url($this->uri->segment(1)),'refresh');
	}

}

?>