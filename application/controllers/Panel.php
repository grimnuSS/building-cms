<?php
	class Panel extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library("session");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}

		public function logout() {
			$this->session->sess_destroy();
			$this->load->view("main");
		}
		public function index() {
			$this->load->view("panel/index");
		}
	}
?>
