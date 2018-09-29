<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function admin_signin()	{
		$admin_email = $this->input->post('admin_email',true);
		$admin_pass = $this->input->post('admin_pass',true);
		$this->load->model('Admin_Model');
		$result = $this->Admin_Model->admin_model_info($admin_email,$admin_pass);
		$sdata = array();		
		if ($result) {
			$sdata['id'] = $result->$admin_id;			
			$sdata['admin_name'] = $result->$admin_name;
			$sdata['admin_email'] = $result->$admin_email;
			$this->session->set_userdata($sdata);			
			redirect('admin_dashboard');			
		}else{
			$sdata['message'] = "Incorrect username or password.Please try again.";
			$this->session->set_userdata($sdata);
			redirect('welcome');
		}	
	}

	public function admin_signout()	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('admin_name');
		$sdata['sign_out_message'] = "Sign Out Successfully";
		$this->session->set_userdata($sdata);
		redirect('welcome');	
		
	}


	public function index()	{
		$data = array();
		$data ['dashboard_content'] = $this->load->view('pages/dashboard','',true);
		$this->load->view('pages/index',$data);	
	}

	public function sign_up()	{
		$data = array();
		$data ['dashboard_content'] = $this->load->view('pages/sign_up','',true);
		$this->load->view('pages/index',$data);		
	}

	public function edit_admin()	{
		$data = array();
		$data ['dashboard_content'] = $this->load->view('pages/edit_admin','',true);
		$this->load->view('pages/index',$data);		
	}
}