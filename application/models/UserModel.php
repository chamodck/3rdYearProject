<?php
	class UserModel extends CI_Model{
		public function login($nic,$password){
			$query=$this->db->query("SELECT * FROM user WHERE nic='$nic' AND password='$password'");
			if($query->num_rows()==1){
				return 1;
			}else{
				return 0;
			}
		}
	}
?>