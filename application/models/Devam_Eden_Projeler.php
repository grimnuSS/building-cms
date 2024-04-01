<?php
class Devam_Eden_Projeler extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDevamEdenProjeler($id = null) {
		if ($id == null)
			return $this->db->query("select * from devam_eden_projeler");
		else
			return $this->db->query("select * from devam_eden_projeler where id = $id");
	}
	public function saveDevamEdenProjeler($data) {
		$this->db->insert('devam_eden_projeler', $data);
	}
	public function updateDevamEdenProjeler($id, $data) {
		$this->db->where('id', $id)->update('devam_eden_projeler', $data);
	}
	public function deleteDevamEdenProjeler($id) {
		$this->db->where('id', $id)->delete('devam_eden_projeler');
	}
}
?>
