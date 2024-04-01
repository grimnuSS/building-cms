<?php
	class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model("Admin_Model");
			$this->load->library("session");
		}
		public function login() {
			$this->load->view("admin/login");
		}

		public function login_post() {
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$array = array(
				"username" => $username,
				"password" => $password
			);

			$sorgu = $this->Admin_Model->login($array);
			if ($sorgu) {
				foreach($sorgu->result() as $deger) {
					if ($deger->username == $username) {

						$userdata = array(
							"username" => $deger->username,
							"email" => $deger->email,
							"logged_in" => TRUE
						);
						$this->session->set_userdata($userdata);

						redirect("panel/");
					} else {
						echo 'Kullanıcı adı veya şifre hatalı'; 
					}
				}
 			} else {
				echo 'Hata meydana geldi';
			}

		}
	}
?>