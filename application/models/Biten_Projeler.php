<?php
class Biten_Projeler extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getBitenProjeler($id = null) {
		if ($id == null)
			return $this->db->query("select * from biten_projeler");
		else
			return $this->db->query("select * from biten_projeler where id = $id");
	}
	public function saveProjeler($data) {
		$this->db->insert('biten_projeler', $data);
	}
	public function updateProjeler($id, $data) {
		$this->db->where('id', $id)->update('biten_projeler', $data);
	}
	public function deleteProjeler($id) {
		$this->db->where('id', $id)->delete('biten_projeler');
	}
}
?>
