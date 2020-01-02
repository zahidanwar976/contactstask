<?php

class Mdl_login extends CI_Model{

	public function __construct(){
		parent:: __construct();
	} 
	public function getdetail($username,$password){
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$query  = $this->db->get('signup')->result();
	return $query;
	}
	public function getdata(){
	$query1 = $this->db->get('signup')->result();
	return $query1;
	}
	public function remove($id){
		$this->db->where('id',$id);
		$this->db->delete('signup');
	}
}

?>