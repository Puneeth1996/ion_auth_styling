<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		 {
			 // redirect them to the login page
			 redirect('auth/login', 'refresh');
		 }
   }
   public function profile(){
     $this->load->view('header');
 		$this->load->view('menu_other');
 		$this->load->view('userprofile');
 		$this->load->view('footer');
   }
	 public function changePassword(){
		 $old = $this->input->post("old");
		 $new = $this->input->post("new");
		 $resp = $this->input->post("rep");
		 $user = $this->ion_auth->user()->row();
		 if($new == $resp){
			 if ($this->ion_auth->change_password($user->username, $old, $new))
			 {
					 echo('Password Changed Successfully');
					 return TRUE;
			 }
			 else{
				 echo($this->ion_auth->errors());
			 }
	 	}
		else{
				echo('Confirm Password is not Matching');
		}
	 }
	 function setFav(){
		 $src = $this->input->post('src');
		 $user = $this->ion_auth->user()->row();
		 $data = array(
        'type' => 1,
        'user_id'  => $user->id,
        'src'  => $src
			);
			$del = array('type' => 1,
			'user_id'  => $user->id);
			$this->db->delete('tbl_user_fav',$del);
			$this->db->replace('tbl_user_fav', $data);
			echo "This Report has been set as your Dashboard.";
	 }
 }
