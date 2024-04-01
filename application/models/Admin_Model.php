<?php
	class Admin_Model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function login($array = array()) {
			$username = $array["username"];
			$password = base64_encode($array["password"]);
			
			return $this->db->query("select username,password,email from admins where username='$username' and password='$password'");
		}

	}
?>