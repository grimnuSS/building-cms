<?php
class Yeni_Projeler extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getYeniProjeler($id = null) {
		if ($id == null)
			return $this->db->query("select * from yeni_projeler");
		else
			return $this->db->query("select * from yeni_projeler where id = $id");
	}
	public function saveYeniProjeler($data) {
		$this->db->insert('yeni_projeler', $data);
	}
	public function updateYeniProjeler($id, $data) {
		$this->db->where('id', $id)->update('yeni_projeler', $data);
	}
	public function deleteYeniProjeler($id) {
		$this->db->where('id', $id)->delete('yeni_projeler');
	}

}
?>
