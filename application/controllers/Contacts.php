<?php
class Contacts extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contacts_model');
	}
	public function index()
	{
		$this->load->view('panel/iletisim');
	}
	public function save(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone')
		);
		$this->Contacts_model->saveContacts($data);
		echo "İletişiminiz Başarı ile Bize Ulaştı!";
	}
	public function delete($id) {
		$this->Contacts_model->deleteContacts($id);
		$success = "Başarıyla Silindi!";
		$this->load->view("Panel/iletisim", compact("success"));
	}
}
?>
