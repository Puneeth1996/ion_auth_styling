<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pager extends CI_Controller {

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
		echo "Test";
  }
  function getMenu(){
		$this->db->where("parent = 0");
		$this->db->order_by("priority");
		$query = $this->db->get("tbl_menu");
		$data['menu'] = array();
		foreach($query->result() as $row){
			$data['menu'][$row->id] = $row;
			$data['menu'][$row->id]->sub = [];
			$this->db->where("parent",$row->id);
			$this->db->order_by("priority");
			$q = $this->db->get("tbl_menu");
			foreach($q->result() as $r){
				$data['menu'][$row->id]->sub[$r->id] = $r;
				if(!$r->is_group){}
				else{
					$this->db->where("parent",$r->id);
					$this->db->order_by("priority");
					$q1 = $this->db->get("tbl_menu");
					foreach($q1->result() as $r1){
						$data['menu'][$row->id]->sub[$r->id]->sub[$r1->id] = $r1;
					}
				}
			}
		}
	/*	echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$this->load->view("pager/menulist",$data);
	}
}
