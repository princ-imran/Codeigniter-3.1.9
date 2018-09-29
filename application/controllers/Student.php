<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function add_student()	{
		$data = array();		
		$data ['dashboard_content'] = $this->load->view('pages/student/add_student','',true);
		$this->load->view('pages/index',$data);	
	}

	public function save_student()	{
		$this->load->model('Student_Model');
		$result = $this->Student_Model->student_model_info();
		$sdata = array();		
		$sdata['save_student_msg'] = "Student Inserted";
		$this->session->set_userdata($sdata);
		redirect('student_list');		
	}

	public function student_list()	{
		$data = array();	
		$this->load->model('Student_Model');	
		$data['all_student_list'] = $this->Student_Model->all_student_list();
		$data ['dashboard_content'] = $this->load->view('pages/student/index',$data,true);
		$this->load->view('pages/index',$data);	
	}

	public function edit_student($student_id)	{
		$data = array();
		$this->load->model('Student_Model');
		$data['all_student_info_by_id'] = $this->Student_Model->all_student_info_by_id($student_id);			
		$data ['dashboard_content'] = $this->load->view('pages/student/edit_student',$data,true);
		$this->load->view('pages/index',$data);	
	}

	public function update_student()	{		
		$this->load->model('Student_Model');
		$this->Student_Model->update_student();
		$sdate = array();
		$sdata['update_student_msg'] = 'Update Successfully';
		$this->session->set_userdata($sdata);		
		redirect ('student_list');
		
	}
	public function delet_student($student_id)	{		
		$this->load->model('Student_Model');
		$this->Student_Model->delet_student($student_id);
		$sdate = array();
		$sdata['delet_student_msg'] = 'Delet Successfully';
		$this->session->set_userdata($sdata);		
		redirect ('student_list');
		
	}
	
}
