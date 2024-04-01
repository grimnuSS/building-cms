<?php
class Contacts_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	public function getContacts($id = null) {
		if ($id == null)
			return $this->db->query("select * from contacts");
		else
			return $this->db->query("select * from contacts where id = $id");
	}
	public function saveContacts($data) {
		$this->db->insert('contacts', $data);
	}
	public function deleteContacts($id) {
		$this->db->where('id', $id)->delete('contacts');
	}

}
?>
