<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    if (!$this->ion_auth->logged_in())
     {
       // redirect them to the login page
       redirect('auth/login', 'refresh');
     }
	}
  function index(){

  }
  function render_output($output){
    /*$this->load->view('header_admin');
		$data = $this->menu->getMenu();
		$this->load->view('menu',$data);*/
    $this->load->view('admin/menu',(array)$output);
		#$this->load->view('footer');
  }
  function menu(){
    $crud = new grocery_CRUD();
    $crud->set_table('tbl_menu');
    $crud->set_subject('Menu');
		$crud->set_relation('parent','tbl_menu','{id} - {title}');
		#$crud->unset_jquery();
    $output = $crud->render();
    $this->render_output($output);
  }

}
