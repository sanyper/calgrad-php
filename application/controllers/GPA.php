<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class GPA extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->database(); การเขียนแบบ manual ถ้าจะให้ load auto ก็ไปใน config->autoload.php

		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper(array('form','url'));
		//$this->load->helper('url');

	}

	public function index()
	{


		$data = $this->user_model->get_address();



		$this->load->view('header.php');
		$this->load->view('content.php', $data);
		$this->load->view('footer.php');
	}

	public function update($id)
	{
		$data = $this->user_model->get_1address($id);

		if ( ! $this->input->post('submit') ) {
			$this->load->view('header.php');
			$this->load->view('edit_form.php',$data);
			$this->load->view('footer.php');
		} else {
			$submit= $this->input->post(NULL, TRUE);
			$data = array(
				'subject_code'		=>	$submit['subject_code'],
				'subject_name'	=>	$submit['subject_name'],
				'credit'	=>	$submit['credit'],
				'grade'	    =>	$submit['grade']
			);
			$this->user_model->update_data($id,$data);
			redirect('gpa');
		}
	}

	public function delete($id)
	{
		$this->user_model->delete_data($id);
		redirect('gpa');
	}

	public function insert1()
	{
		// Load User_model.php
		$this->load->model('user_model');

		// returns all POST items with XSS filter
		$submit= $this->input->post(NULL, TRUE);
		$data = array(
			'subject_code'		=>	$submit['subject_code'],
			'subject_name'	=>	$submit['subject_name'],
			'credit'	    =>	$submit['credit'],
			'grade'	    =>	$submit['grade']
		);

		// call insert_data() method
		if ( $this->user_model->insert_data($data) )
			$data['insert_result'] = "Your data was successfully updated!";
		else
			$data['insert_result'] = "Error! Problem updating data.";

		// Load insert_result.php
		$this->load->view('header');
		$this->load->view('insert_result', $data);
		$this->load->view('footer');
		//var_dump($data);
	}

	public function form()
	{
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function insert(){
		$this->load->library('form_validation');
		// Set validation rules
		$this->form_validation->set_rules('code', 'subject_name', 'credit', 'grade', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('form');
			$this->load->view('footer');
		} else {
			// Load post_model.php
			$this->load->model('user_model');

			// Get the other data
			$submit_data['subject_code'] = $this->input->grade('subject_code', TRUE);
			$submit_data['subject_name'] = $this->input->grade('subject_name', TRUE);
			$submit_data['credit'] = $this->input->grade('credit', TRUE);
			$submit_data['grade'] = $this->input->grade('grade', TRUE);



			if ($this->post_model->insert_data($submit_data)) {
				$this->session->set_flashdata('notify_message', 'Your data was successfully updated!');
			} else {
				$this->session->set_flashdata('notify_message', 'Error! Problem updating data.');
			}
			// Load view
			$this->load->view('header');
			$this->load->view('insert_result');
			$this->load->view('footer');
		}
	}


}
