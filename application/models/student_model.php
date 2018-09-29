<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Model extends CI_Model {

	public function student_model_info(){
		$data = array();
		$data['student_roll'] = $this->input->post('student_roll',true);
		$data['student_name'] = $this->input->post('student_name',true);
		$data['student_phone'] = $this->input->post('student_phone',true);
		$this->db->INSERT('student_info',$data);

	}

	public function all_student_list(){
		$this->db->SELECT('*');
		$this->db->FROM('student_info');
		$query = $this->db->get();
		$student_list = $query->result();
		return $student_list;
	}

	public function all_student_info_by_id($student_id){
		$this->db->SELECT('*');
		$this->db->FROM('student_info');
		$this->db->WHERE('id',$student_id);
		$query = $this->db->get();
		$single_student = $query->row();
		return $single_student;
	}

	public function update_student(){
		$data = array();
		$student_id = $this->input->post('id',true);
		$data['student_roll'] = $this->input->post('student_roll',true);
		$data['student_name'] = $this->input->post('student_name',true);
		$data['student_phone'] = $this->input->post('student_phone',true);
		$this->db->WHERE('id',$student_id);
		$this->db->UPDATE('student_info',$data);		
	}

	public function delet_student($student_id){		
		$this->db->WHERE('id',$student_id);
		$this->db->DELETE('student_info');		
	}
}
