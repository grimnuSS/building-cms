<?php
class Hizmetler_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getHizmetler($id = null) {
		if ($id == null)
			return $this->db->query("select * from hizmetler");
		else
			return $this->db->query("select * from hizmetler where id = $id");
	}
	public function saveHizmetler($data) {
		$this->db->insert('hizmetler', $data);
	}
	public function updateHizmetler($id, $data) {
		$this->db->where('id', $id)->update('hizmetler', $data);
	}
	public function deleteHizmetler($id) {
		$this->db->where('id', $id)->delete('hizmetler');
	}
}
?>
