<?php
class Menu{

   function __construct() {
       $this->CI =& get_instance();
       $this->CI->load->database();
   }

  function getMenu(){
		$this->CI->db->where("parent = 0");
		$this->CI->db->order_by("priority");
		$query = $this->CI->db->get("tbl_menu");
		$data['menu'] = array();
		foreach($query->result() as $row){
			$data['menu'][$row->id] = $row;
			$data['menu'][$row->id]->sub = [];
			$this->CI->db->where("parent",$row->id);
			$this->CI->db->order_by("priority");
			$q = $this->CI->db->get("tbl_menu");
			foreach($q->result() as $r){
				$data['menu'][$row->id]->sub[$r->id] = $r;
				if(!$r->is_group){}
				else{
					$this->CI->db->where("parent",$r->id);
					$this->CI->db->order_by("priority");
					$q1 = $this->CI->db->get("tbl_menu");
					foreach($q1->result() as $r1){
						$data['menu'][$row->id]->sub[$r->id]->sub[$r1->id] = $r1;
					}
				}
			}
		}
    return $data;
	}
}
