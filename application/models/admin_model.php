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

	public function all_admin_list(){
		$this->db->SELECT('*');
		$this->db->FROM('admin');
		$query = $this->db->get();
		$admin_list = $query->result();
		return $admin_list;
	}

	public function save_admin(){
		$data =	array();
		$data['admin_image'] = $this->input->post('admin_image',true);
		$sdata = array();
		$error = "";
		$config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('admin_image'))
                {
                        $error = $this->upload->display_errors();                        
                }
                else
                {
                        $sdata = $this->upload->data();

                        $data['admin_image'] = $sdata['file_name'];
                }
        
		$this->db->INSERT('admin',$data);
	}

	public function admin_info_by_id(){
		$this->db->SELECT('*');
		$this->db->FROM('admin');
		$this->db->WHERE('id',1);
		$query = $this->db->get();
		$single_admin = $query->row();
		return $single_admin;
	}
}
