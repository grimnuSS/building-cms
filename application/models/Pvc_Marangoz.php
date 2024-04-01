<?php
class Pvc_Marangoz extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getPVC() {
		return $this->db->query("select * from pvc_marangoz where category='pvc'");
	}
	public function getMarangoz() {
		return $this->db->query("select * from pvc_marangoz where category='marangoz'");
	}
	public function getPVC_Marangoz($id = null) {
		if ($id == null)
			return $this->db->query("select * from pvc_marangoz");
		else
			return $this->db->query("select * from pvc_marangoz where id = $id");
	}
	public function savePVC_Marangoz($data) {
		$this->db->insert('pvc_marangoz', $data);
	}
	public function updatePVC_Marangoz($id, $data) {
		$this->db->where('id', $id)->update('pvc_marangoz', $data);
	}
	public function deletePVC_Marangoz($id) {
		$this->db->where('id', $id)->delete('pvc_marangoz');
	}

}
?>
