<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function admin_model_info($admin_email,$admin_pass){
		$this->db->select('*');
		$this->db->from('admin');	
		$this->db->where('admin_email',$admin_email);	
		$this->db->where('admin_pass',md5($admin_pass));
		$query = $this->db->get();
		$result = $query->row();		
		return $result;	

	}
}
