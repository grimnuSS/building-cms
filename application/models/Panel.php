<?php
	class Panel extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function getHakkimizda() {
			return $this->db->query("select * from hakkimizda");
		}
		public function updateHakkimizda($header, $body) {
			$this->db->where('id', 1)->update('hakkimizda', array('header' => $header, 'body' => $body));
		}
	}
?>
