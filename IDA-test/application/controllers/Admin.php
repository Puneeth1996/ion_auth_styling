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
		$crud->set_relation('parent','tbl_menu','title = {id} - {title}');
    #$crud->unset_jquery();
    $crud->field_type('permissions','multiselect',
            array('1' => 'Puneeth', '2' => 'Ravindra','3' => 'Raju' , '4' => 'admin', '5' => 'Manju'));


    // $crud->set_relation('permissionsColEmp','users','id')

    $crud->field_type('permissions','multiselect',array('1' => 'Puneeth', '2' => 'Ravindra','3' => 'Raju' , '4' => 'admin', '5' => 'Manju'));
    $output = $crud->render();
    $this->render_output($output);

  }

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}


  function employees_management()
{
    $crud = new grocery_CRUD();
 
    $crud->set_theme('datatables');
    $crud->set_table('employees');
    $crud->display_as('officeCode','Office City');
    $crud->set_subject('Employee');
 
    $crud->set_relation('officeCode','offices','city');
    

    $this->db->select('employeeNumber');
    $results = $this->db->get('employees')->result();
    $employees_multiselect = array();

    foreach ($results as $result) {
      echo $result;
        $employees_multiselect[$result->employeeNumber] = $result->employeeNumber;
    }

    $crud->field_type('firstName', 'multiselect', $employees_multiselect); 
 
    $output = $crud->render();
 
    $this->_example_output($output);
    

}

function userMangement(){
  $crud = new grocery_CRUD();
  $crud->set_table('users');

  $output = $crud->render();

  $this->_example_output($output);
}


}
