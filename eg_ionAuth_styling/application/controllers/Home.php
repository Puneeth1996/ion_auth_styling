<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation', 'grocery_CRUD']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
	}



	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}



	public function index()
	{	
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
	}



	public function demo()
	{	
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('offices');

		$output = $crud->render();


		$this->load->view('template/header');
		$this->_example_output($output);
		$this->load->view('template/footer');
		
	}


	public function blog_admin()
	{	
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('view_backend');

		$output = $crud->render();


		// $this->load->view('template/header');
		// $this->_example_output($output);
		// $this->load->view('template/footer');


		$this->_example_output($output);
		
	}

}
